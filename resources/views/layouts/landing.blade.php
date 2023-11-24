<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <nav class="bg-emerald-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
        <div class="w-40 h-30">
            <h1>Logo****</h1>
        </div>
            <div class="flex space-x-4">

            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>
