<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-700">Admin Dashboard</h1>
        <p class="mt-2 text-gray-600">Welcome, {{ Auth::user()->name }} (Admin)</p>

        <div class="mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>

</html>