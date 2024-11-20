<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        .container{
            max-width:1200px;
            margin:auto;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- <x-header/>
    <x-container>
        @yield('content')
    </x-container> --}}
    <x-profile/>
</body>
</html>