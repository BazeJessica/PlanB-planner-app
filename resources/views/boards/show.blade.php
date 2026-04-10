<!DOCTYPE html>
<html>
<head>
    <title>{{ $board->name }} - Planner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-500 min-h-screen p-6">

    <!-- NAVBAR (PUT INSIDE BODY) -->
    <div class="bg-white shadow mb-6">
        <div class="max-w-6xl mx-auto p-4 flex justify-between items-center">

            <a href="/" class="font-bold text-gray-800">
                📋 Planner
            </a>

            <div class="flex gap-4">
                <a href="/boards" class="text-gray-600 hover:text-blue-600">
                    Boards
                </a>
            </div>

        </div>
    </div>

    <!-- HEADER -->
    <div class="max-w-6xl mx-auto mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
             {{ $board->name }}
        </h1>
        <p class="text-gray-500">Manage your tasks</p>
    </div>

    <!-- ADD TASK -->
    <div class="max-w-6xl mx-auto bg-white p-4 rounded-xl shadow mb-6">
        <form method="POST" action="/tasks" class="flex gap-2 flex-wrap">
            @csrf

            <input
                name="title"
                placeholder="Task title..."
                class="flex-1 border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                required
            >

            <input
                name="description"
                placeholder="Description..."
                class="flex-1 border rounded-lg p-2"
            >

            <input type="hidden" name="board_id" value="{{ $board->id }}">

            <button class="bg-blue-600 text-white px-4 rounded-lg hover:bg-blue-700">
                Add Task
            </button>
        </form>
    </div>

    <!-- BOARD -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-4">

        <!-- TO DO -->
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-bold text-gray-700 mb-3">📝 To Do</h2>

            @forelse($tasks->where('status','todo') as $task)
                <div class="bg-gray-100 p-3 rounded-lg mb-2 hover:bg-gray-200 transition">
                    <p class="font-medium text-gray-800">{{ $task->title }}</p>
                    <p class="text-sm text-gray-500">{{ $task->description }}</p>
                </div>
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <!-- DOING -->
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-bold text-yellow-600 mb-3">⚡ Doing</h2>

            @forelse($tasks->where('status','doing') as $task)
                <div class="bg-yellow-50 border border-yellow-200 p-3 rounded-lg mb-2 hover:bg-yellow-100 transition">
                    <p class="font-medium text-gray-800">{{ $task->title }}</p>
                    <p class="text-sm text-gray-500">{{ $task->description }}</p>
                </div>
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

        <!-- DONE -->
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-bold text-green-600 mb-3">✅ Done</h2>

            @forelse($tasks->where('status','done') as $task)
                <div class="bg-green-50 border border-green-200 p-3 rounded-lg mb-2 hover:bg-green-100 transition">
                    <p class="font-medium text-gray-800 line-through">{{ $task->title }}</p>
                    <p class="text-sm text-gray-500">{{ $task->description }}</p>
                </div>
            @empty
                <p class="text-sm text-gray-400">No tasks</p>
            @endforelse
        </div>

    </div>

</body>
</html>