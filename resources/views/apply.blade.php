@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Book a Furniture</h1>
        <form action="{{ route('apply') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Firniture</label>
                <select name="furniture_id" class="w-full p-2 border rounded">
                    @foreach ($furnitures as $furniture)
                        <option value="{{ $furniture->id }}" {{ old('furniture_id') == $furniture->id ? 'selected' : '' }}>{{ $furniture->title }}</option>
                    @endforeach
                </select>
                @error('furniture_id') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="w-full border rounded px-3 py-2 @error('date') border-red-500 @enderror" value="{{ old('date') }}">
                @error('date')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="time" class="block text-gray-700">Time</label>
                <input type="time" name="time" id="time" class="w-full border rounded px-3 py-2 @error('time') border-red-500 @enderror" value="{{ old('time') }}">
                @error('time')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="count" class="block text-gray-700">Count</label>
                <input type="count" name="count" id="count" class="w-full border rounded px-3 py-2 @error('count') border-red-500 @enderror" value="{{ old('count') }}">
                @error('count')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="payment" class="block text-gray-700">Payment Method</label>
                <select name="payment" id="payment" class="w-full border rounded px-3 py-2">
                    <option value="cash">Cash</option>
                    <option value="card">Card</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Reservation</button>
        </form>
    </div>
@endsection