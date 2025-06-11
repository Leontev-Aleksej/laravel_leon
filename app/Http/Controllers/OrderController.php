<?php
namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create($furniture_id)
    {
        $furnitures = Furniture::all();
        $selectedFurniture = Furniture::findOrFail($furniture_id);
        return view('order.create', compact('furnitures', 'selectedFurniture'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'furniture_id' => 'required|exists:furnitures,id',
            'date' => 'required|date|after:today',
            'time' => 'required',
            'count' => 'required|integer|min:1',
            'payment' => 'required|in:cash,card',
        ]);

        Order::create([
            'user_id' => Auth::id(),
            'furniture_id' => $request->furniture_id,
            'date' => $request->date,
            'time' => $request->time,
            'count' => $request->count,
            'payment' => $request->payment,
        ]);

        return redirect()->route('home')->with('success', 'Ваша заявка принята! Вы выбрали ремонт');
    }

    public function index()
    {
        $orders = Order::all();
        return view('home', compact('orders'));
    }

    public function showApplyForm()
    {
        $user = Auth::user();
        $hasApplied = $user->orders()->exists();
        $furnitures = Furniture::all();
        return view('apply', compact('hasApplied', 'furnitures'));
    }

    
}