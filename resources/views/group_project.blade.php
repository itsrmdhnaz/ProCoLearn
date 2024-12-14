<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bismillah</title>

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
                        class="hidden bg-transparent w-0 md:block md:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                        id="searchInput">
                </div>
            </div>
            <i id="overlay-menu-button"
                class="cursor-pointer ti ti-menu-4 font-normal text-3xl text-center text-white h-auto w-10 justify-center sm:hidden flex items-center rounded-lg flex-shrink-0"></i>
        </div>

        <!-- Filter Button -->
        <div class="px-4 py-3 flex justify-end">
            <button
                class="bg-orangeCustom text-white font-semibold px-4 py-1 rounded-lg flex items-center space-x-2 drop-shadow-xl">
                <span>filter</span>
                <i class="ti ti-adjustments-horizontal text-xl"></i>
            </button>
        </div>

        <!-- Scrollable Content Area -->
        <div class="flex-1 overflow-y-auto scrolled-text px-4">
            <div class="space-y-4">
                <div class="h-4"></div>
                <!-- Card 1 -->
                <div class="bg-dark rounded-3xl p-2">
                    <div class="bg-lightDark rounded-t-3xl h-36 mb-2">
                        <span
                            class="inline-block m-4 bg-orangeCustom bg-opacity-70 drop-shadow-lg text-white px-3 py-1 rounded-full text-sm mb-4">
                            not-started
                        </span>
                    </div>
                    <div class="space-y-2 mx-3">
                        <div class="flex justify-between">
                            <h3 class="text-white text-xl font-semibold">To Do APP</h3>
                            <span class="text-green-400">Needs 3</span>
                        </div>
                        <p class="text-[#D9D9D9] w-1/2 overflow-hidden text-ellipsis whitespace-nowrap">Flutter,
                            Laravel, UI</p>
                        <div class="flex justify-between items-center h-8"> <!-- Tambahkan h-8 di sini -->
                            <div class="flex items-center gap-2 h-full"> <!-- Tambahkan h-full di sini -->
                                <div class="relative w-8 h-6"> <!-- Tambahkan h-6 di sini -->
                                    <!-- Background F -->
                                    <div class="absolute left-2 w-6 h-6 bg-orange-400 rounded-full"></div>
                                    <!-- Main F -->
                                    <div
                                        class="absolute left-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <span class="text-white text-sm">F</span>
                                    </div>
                                </div>
                                <span class="text-[#D9D9D9] text-sm">2 more</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <!-- Bookmark Icon -->
                                <i class="ti ti-bookmark text-orangeCustom text-2xl"></i>
                                <i class="ti ti-rosette-discount-check-off text-orangeCustom text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-dark rounded-3xl p-2">
                    <div class="bg-lightDark rounded-t-3xl h-36 mb-2">
                        <span
                            class="inline-block m-4 bg-orangeCustom bg-opacity-70 drop-shadow-lg text-white px-3 py-1 rounded-full text-sm mb-4">
                            not-started
                        </span>
                    </div>
                    <div class="space-y-2 mx-3">
                        <div class="flex justify-between">
                            <h3 class="text-white text-xl font-semibold">To Do APP</h3>
                            <span class="text-green-400">Needs 3</span>
                        </div>
                        <p class="text-[#D9D9D9] w-1/2 overflow-hidden text-ellipsis whitespace-nowrap">Flutter,
                            Laravel, UI</p>
                        <div class="flex justify-between items-center h-8"> <!-- Tambahkan h-8 di sini -->
                            <div class="flex items-center gap-2 h-full"> <!-- Tambahkan h-full di sini -->
                                <div class="relative w-8 h-6"> <!-- Tambahkan h-6 di sini -->
                                    <!-- Background F -->
                                    <div class="absolute left-2 w-6 h-6 bg-orange-400 rounded-full"></div>
                                    <!-- Main F -->
                                    <div
                                        class="absolute left-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <span class="text-white text-sm">F</span>
                                    </div>
                                </div>
                                <span class="text-[#D9D9D9] text-sm">2 more</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <!-- Bookmark Icon -->
                                <i class="ti ti-bookmark text-orangeCustom text-2xl"></i>
                                <i class="ti ti-rosette-discount-check-filled text-orangeCustom text-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-16"></div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <div class="bg-dark p-4 flex justify-around items-end">
            <button>
                <i class="ti ti-world-code text-3xl text-lightDark2"></i>
            </button>
            <button>
                <i class="ti ti-users-group text-5xl text-white"></i>
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
