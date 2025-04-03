<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <main class="flex w-full h-full">
        <header>
            @include('layout/sections/navbar/navbar')
        </header>
        <section class="flex relative w-full h-screen bg-gray-50 dark:bg-gray-900">
            @yield('content')
        </section>
    </main>
</body>
</html>
