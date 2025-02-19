@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

        @if($errors->any())
        <div class="mb-4 text-red-500">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('member.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Phone (Optional)</label>
                <input type="text" name="phone" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded">Register</button>
        </form>

        <p class="text-center text-sm mt-4">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login here</a>
        </p>
    </div>
</div>
@endsection