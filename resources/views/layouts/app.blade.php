<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-[100vh] w-[100vw] bg-[#8967B3] flex justify-center items-center overflow-hidden">
        @yield('content')
    </div>
</body>
</html>