<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L2 - Advice generator app</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col bg-neutral-darkBlue">
    <div class="flex items-center justify-center sm:h-screen">
        @livewire('advice')
        @livewire('footer')
    </div>
</body>

</html>
