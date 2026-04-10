<!DOCTYPE html>
<html>
<head>
    <title>Planner App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="text-center max-w-2xl">

        <!-- TITLE -->
        <h1 class="text-5xl font-bold text-gray-800 mb-4">
            🧠 Planner App
        </h1>

        <p class="text-gray-500 mb-8">
            Organize your tasks, boards, and productivity in one place.
        </p>

        <!-- BUTTONS -->
        <div class="flex justify-center gap-4">

            <a href="/boards"
               class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700 transition">
                📋 Go to Boards
            </a>

        </div>

        <!-- FEATURE CARDS -->
        <div class="grid md:grid-cols-3 gap-4 mt-12">

            <div class="bg-white p-4 rounded-xl shadow">
                <h3 class="font-bold text-gray-800">Boards</h3>
                <p class="text-sm text-gray-500">Create workspaces for projects</p>
            </div>

            <div class="bg-white p-4 rounded-xl shadow">
                <h3 class="font-bold text-gray-800">Tasks</h3>
                <p class="text-sm text-gray-500">Organize tasks in columns</p>
            </div>

            <div class="bg-white p-4 rounded-xl shadow">
                <h3 class="font-bold text-gray-800">Productivity</h3>
                <p class="text-sm text-gray-500">Stay focused and structured</p>
            </div>

        </div>

    </div>

</body>
</html>