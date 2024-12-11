<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uhuy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark h-screen">
    @include('home.home_menu_mobile')
    {{-- screen --}}
    <div class="h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark flex flex-col sm:flex-row">
        <x-sidebar></x-sidebar>
        {{-- value --}}
        <div class="flex flex-col h-full sm:flex-1">
            <div class="flex w-full gap-3 flex-row my-4 px-4">
                {{-- logo in mobile --}}
                <img src="{{ asset('assets/images/logo-mobile.svg') }}" alt="logo" class="sm:hidden w-16">
                {{-- search --}}
                <div class="flex flex-1 justify-end sm:hidden" id="searchContainer">
                    <div class="flex gap-2 items-center transition-all duration-100 border-0 ease-in-out rounded-none py-0 px-0 md:rounded-full md:border-white md:border-2 md:py-2 md:px-4 md:gap-2 md:flex-1"
                        id="searchWrapper">
                        <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                            class="w-7 cursor-pointer md:cursor-default" id="searchIcon">
                        <input type="text" placeholder="Search Your Study Group Here"
                            class="hidden bg-transparent w-0 md:block md:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                            id="searchInput">
                    </div>
                </div>
                <i id="overlay-menu-button"
                    class="cursor-pointer ti ti-menu-4 font-normal text-3xl text-center text-white h-auto w-10 justify-center sm:hidden flex items-center rounded-lg flex-shrink-0"></i>
            </div>
            @include('chat.message')
            <div class="flex w-full py-7 bg-dark gap-10 px-10 sm:hidden">
                <button id="message-chat">
                    <i class="ti ti-home-filled text-4xl text-white ml-10 flex-shrink-0"></i>
                </button>
                <button class="flex gap-3 items-center bg-orangeCustom flex-1 justify-center rounded-full" id="new-chat-button">
                    <i class="ti ti-plus text-xl text-white"></i>
                    <p class="text-xs font-semibold text-white">New Chat</p>
                </button>
                <button id="contact-chat">
                    <i class="ti ti-user-filled text-4xl text-lightDark flex-shrink-0"></i>
                </button>
            </div>
            <div class="w-full justify-end hidden sm:flex">
                <button class="flex gap-3 items-center bg-orangeCustom px-6 py-1 mt-4 mb-8 mr-7 rounded-md">
                    <i class="ti ti-plus text-xl text-white"></i>
                    <p class="text-xs font-semibold text-white">New Chat</p>
                </button>
            </div>

            @include('chat.new_chat_page')
        </div>
        @include('home.profile_bar')
    </div>

    <script src="js/chat.js"></script>
</body>

</html>
