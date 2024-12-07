<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nyoba</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark">
    {{-- menu mobile --}}
    @include('home.home_menu_mobile')
    {{-- screen --}}
    <div class="max-h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark">
        <div class="flex w-full h-screen">
            {{-- sidebar --}}
            <x-sidebar></x-sidebar>
            {{-- main --}}
            @include('home.home_main')
            {{-- profile bar --}}
            @include('home.profile_bar')
        </div>
    </div>
    <script src="js/home.js"></script>
</body>

</html>
