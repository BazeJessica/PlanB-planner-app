<!DOCTYPE html>
<html>

<head>
    <title>Planner Boards</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <!-- NAVBAR (FIXED POSITION) -->
    <div class="bg-white shadow mb-6">
        <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">

            <a href="/" class="font-bold text-gray-800">
                🧠 Planner
            </a>

            <div class="flex gap-4">
                <a href="/boards" class="text-gray-600 hover:text-blue-600">
                    Boards
                </a> Boards
                </a>
            </div>

        </div>
    </div>

    <!-- HEADER -->
    <div class="max-w-5xl mx-auto mb-6">
        <h1 class="text-3xl font-bold text-gray-800">📋 Planner Boards</h1>
        <p class="text-gray-500">Create and manage your boards</p>
    </div>

    <!-- CREATE BOARD -->
    <div class="max-w-5xl mx-auto bg-white p-4 rounded-xl shadow mb-6">
        <form method="POST" action="/boards" class="flex gap-2">
            @csrf

            <input
                name="name"
                placeholder="Enter board name..."
                class="flex-1 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                required>

            <button class="bg-blue-600 text-white px-4 rounded-lg hover:bg-blue-700">
                Create
            </button>
        </form>
    </div>

    <!-- BOARDS LIST -->
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

       @foreach($boards as $board)
    <a href="/boards/{{ $board->id }}"
       class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition block">

        <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-800">
                📁 {{ $board->name }}
            </h2>

            <span class="text-blue-500 font-bold">Open →</span>
        </div>

        <p class="text-sm text-gray-500 mt-2">
            Click to view tasks inside this board
        </p>

    </a>
@endforeach

    </div>

</body>

</html>