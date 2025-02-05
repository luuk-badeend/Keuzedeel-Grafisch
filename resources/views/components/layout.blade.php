<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Aileron:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen m-0 bg-Background">
    <x-navigation class="fixed top-0 w-full z-50"></x-navigation>
    <main class="flex-1 p-4 pb-96 pt-44 md:px-16 lg:px-72"> <!-- Adjust based on the height of your navigation -->
        {{ $slot }}
    </main>
    <x-footer class="mt-auto"></x-footer>
</body>

</html>
