<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        @if(session('success'))
            <p class="text-green-600">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <p class="text-red-500">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
        </form>
    </div>
</body>
</html>
