<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-100 via-emerald-200 to-green-300 text-gray-800 font-sans">

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white bg-opacity-90 backdrop-blur-md shadow-2xl rounded-3xl p-8 max-w-6xl mx-auto">
            @yield('content')
        </div>
    </div>

</body>
</html>
