@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Admin Panel - Orders</h1>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Firstname</th>
                    <th class="border p-2">Middlename</th>
                    <th class="border p-2">Lastname</th>
                    <th class="border p-2">Phone</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">Type</th>
                    <th class="border p-2">Date</th>
                    <th class="border p-2">Time</th>
                    <th class="border p-2">Count</th>
                    <th class="border p-2">Payment</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="border p-2">{{ $order->user->name }} {{ $order->user->lastname }}</td>
                        <td class="border p-2">{{ $order->user->tel }}</td>
                        <td class="border p-2">{{ $order->user->email }}</td>
                        <td class="border p-2">{{ $order->service->title }}</td>
                        <td class="border p-2">{{ $order->date }}</td>
                        <td class="border p-2">{{ $order->time }}</td>
                        <td class="border p-2">{{ $order->number }}</td>
                        <td class="border p-2">{{ ucfirst($order->payment) }}</td>
                        <td class="border p-2">{{ ucfirst($order->status) }}</td>
                        <td class="border p-2">{{ $order->reason ?? '-' }}</td>
                        <td class="border p-2">
                            <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                                @csrf
                                <select name="status" class="border rounded px-2 py-1">
                                    <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>New</option>
                                    <option value="accepted" {{ $order->status == 'accepted' ? 'selected' : '' }}>Одобрена</option>
                                    <option value="rejected" {{ $order->status == 'rejected' ? 'selected' : '' }}>ОТклонена</option>
                                </select>
                                <button type="submit" class="bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700 mt-2">Update</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection