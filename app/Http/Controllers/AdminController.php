<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'section'])->get();
        return view('admin.dashboard', compact('orders'));
    }

    public function approve(Order $order)
    {
        $order->update(['status' => 'approved']);
        return redirect()->route('admin.dashboard')->with('success', 'Заявка одобрена.');
    }

    public function reject(Order $order)
    {
        $order->update(['status' => 'rejected']);
        return redirect()->route('admin.dashboard')->with('success', 'Заявка отклонена.');
    }
}