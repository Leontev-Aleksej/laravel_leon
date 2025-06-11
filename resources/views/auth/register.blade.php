@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <h1 class="text-3xl font-bold mb-6">Регистрация</h1>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Firstname</label>
            <input type="text" name="firstname" class="w-full p-2 border rounded" value="{{ old('firstname') }}">
            @error('firstname') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Middlename</label>
            <input type="text" name="middlename" class="w-full p-2 border rounded" value="{{ old('middlename') }}">
            @error('middlename') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Lastname</label>
            <input type="text" name="lastname" class="w-full p-2 border rounded" value="{{ old('lastname') }}">
            @error('lastname') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Phone</label>
            <input type="text" name="tel" class="w-full p-2 border rounded" value="{{ old('tel') }}">
            @error('tel') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Login</label>
            <input type="login" name="login" class="w-full p-2 border rounded" value="{{ old('login') }}">
            @error('login') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" value="{{ old('email') }}">
            @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded">
            @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Confirm password</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Registration</button>
    </form>
@endsection