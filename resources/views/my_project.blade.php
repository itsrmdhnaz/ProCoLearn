<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMO Group Project</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark h-screen">
    <!-- Main Container -->
    <div class="h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark flex flex-col">
        <!-- Header Section -->
        <div class="flex w-full gap-3 flex-row my-4 px-4">
            {{-- logo in mobile --}}
            <img src="{{ asset('assets/images/logo-mobile.svg') }}" alt="logo" class="sm:hidden w-24">
            {{-- search --}}
            <div class="flex flex-1 justify-end sm:hidden" id="searchContainer">
                <div class="flex gap-2 items-center transition-all duration-100 border-0 ease-in-out rounded-none py-0 px-0 md:rounded-full md:border-white md:border-2 md:py-2 md:px-4 md:gap-2 md:flex-1"
                    id="searchWrapper">
                    <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                        class="w-7 cursor-pointer md:cursor-default" id="searchIcon">
                    <input type="text" placeholder="Search Your Study Group Here"
                        class="hidden bg-transparent w-0 md:block md:w-full placeholder-whitext-white border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                        id="searchInput">
                </div>
            </div>
            <i id="overlay-menu-button"
                class="cursor-pointer ti ti-menu-4 font-normal text-3xl text-center text-white h-auto w-10 justify-center sm:hidden flex items-center rounded-lg flex-shrink-0"></i>
        </div>

        <!-- Header Container -->
        <div class="w-full ml-1  pr-5 bg-gradient-to-r from-[#FC7A56] via-[#fc7a5682] to-[#968f6200]">
            <!-- Content -->
            <div class=" py-1 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    {{-- back button --}}
                    <button class="text-white p-1">
                        <i id="overlay-menu-button"
                            class=" ti ti-chevron-left font-normal text-3xl text-center text-white flex-shrink-0"></i>
                    </button>
                    {{-- title --}}
                    <h1 class="text-white text-lg font-medium">APP Tukang Bangunan</h1>
                </div>
                <!-- Share Icon -->
                <button class="text-white p-1">
                    <i id="overlay-menu-button"
                        class=" ti ti-share font-normal text-3xl text-center text-white flex-shrink-0"></i>
                </button>
            </div>
        </div>

        <div class="w-full flex items-center justify-between gap-4 px-4 py-4">
            <!-- Dropdown -->
            {{-- <div class="relative">
                <button class="flex items-center gap-2 border border-white text-white px-4 w-4/5 py-1 rounded-lg">
                    <span class="text-ellipsis overflow-hidden whitespace-nowrap font-medium text-xs">App Tukang
                        bangunan</span>
                    <i class="ti ti-chevron-down text-2xl"></i>
                </button>
                <!-- Dropdown menu (hidden by default) -->
                <div class="hidden absolute left-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg">
                    <!-- Add dropdown items here -->
                </div>
            </div> --}}

            <!-- New Assignment Button -->
            <button
                class="flex items-center gap-2 bg-coral-500 hover:bg-coral-600 bg-orangeCustom text-white px-4 py-1 drop-shadow-xl rounded-lg">
                <i class="ti ti-plus text-2xl"></i>
                <span>New Assignment</span>
            </button>

            <!-- Right Side -->
            <div class="flex items-center gap-4">

                <!-- Setting Icon -->
                <button class="">
                    <i class="ti ti-settings-code text-3xl text-orangeCustom"></i>
                </button>
                <!-- Mail Icon -->
                <button class="relative">
                    <span class="absolute top-1 right-0 w-3 h-3 bg-[#38CA49] rounded-full"></span>
                    <i class="ti ti-mail text-3xl text-orangeCustom"></i>
                </button>
                <!-- Chat Icon -->
                <button class="">
                    <i class="ti ti-messages text-3xl text-orangeCustom"></i>
                </button>
            </div>
        </div>

        @include('my_project.main_content')

        <!-- Bottom Navigation -->
        <div class="bg-dark p-4 flex justify-around items-end">
            <button>
                <i class="ti ti-world-code text-4xl text-white"></i>
            </button>
            <button>
                <i class="ti ti-users-group text-3xl text-lightDark2"></i>
            </button>
            <button>
                <i class="ti ti-world-star text-3xl text-lightDark2"></i>
            </button>

            <!-- Plus Button -->
            <button class="bg-orangeCustom p-4 rounded-2xl shadow-lg fixed right-10 bottom-24">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
            </button>
        </div>
    </div>
</body>

</html>
