@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Добро пожаловать!</h1>
        <p class="mb-6">Мы продаем мебель для вас</p>

        <a href="{{ route('apply.form') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-6 inline-block">Отправить заявку</a>

    </div>
@endsection