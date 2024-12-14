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
        <div class="w-full ml-1 pl-4 pr-5 bg-gradient-to-r from-[#FC7A56] via-[#fc7a5682] to-[#968f6200]">
            <!-- Content -->
            <div class=" py-1 flex items-center justify-between">
                <h1 class="text-white text-lg font-medium">APP Tukang Bangunan</h1>
                <!-- Share Icon -->
                <button class="text-white p-1">
                    <i id="overlay-menu-button"
                        class=" ti ti-share font-normal text-3xl text-center text-white flex-shrink-0"></i>
                </button>
            </div>
        </div>

        <div class="w-full flex items-center justify-between gap-4 px-4 py-4">
            <!-- Dropdown -->
            <div class="relative">
                <button class="flex items-center gap-2 border border-white text-white px-4 w-4/5 py-1 rounded-lg">
                    <span class="text-ellipsis overflow-hidden whitespace-nowrap font-medium text-xs">App Tukang bangunan</span>
                    <i class="ti ti-chevron-down text-2xl" ></i>
                </button>
                <!-- Dropdown menu (hidden by default) -->
                <div class="hidden absolute left-0 mt-2 w-48 bg-gray-800 rounded-lg shadow-lg">
                    <!-- Add dropdown items here -->
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center gap-4">
                <!-- New Assignment Button -->
                <button class="flex items-center gap-2 bg-coral-500 hover:bg-coral-600 bg-orangeCustom text-white px-4 py-1 drop-shadow-xl rounded-lg">
                    <i class="ti ti-plus text-2xl"></i>
                    <span>New Assignment</span>
                </button>

                <!-- Chat Icon -->
                <button class="">
                    <i class="ti ti-messages text-3xl text-orangeCustom"></i>
                </button>
            </div>
        </div>


        <!-- Scrollable Content Area -->
        <div class="flex-1 overflow-y-auto scrolled-text px-4">
            <div class="space-y-4">
                <!-- Card 1 -->
                <div class="bg-dark rounded-3xl p-2">
                    <!-- Header dengan Logo Kotlin -->
                    <div class="bg-lightDark rounded-t-3xl h-36 mb-2 overflow-hidden">
                    </div>

                    <!-- Content -->
                    <div class="mx-3">

                        <!-- Progress Bar -->
                        <div class="flex gap-5 items-center">
                            <div class="h-2 bg-gray-200 rounded-full flex-1">
                                <div
                                    class="left-0 top-0 h-full w-1/2 bg-gradient-to-r from-orange-500 to-orange-400 rounded-full">
                                </div>
                            </div>
                            <span class="text-white text-sm">50 %</span>
                        </div>

                        <div class="flex justify-between">
                            <h3 class="text-white text-2xl font-semibold">Planning</h3>
                        </div>

                        <!-- Task Count -->
                        <div class="flex items-center gap-2">
                            <span class="text-white">10 task - </span>
                            <span class="text-orange-400">4 left</span>
                        </div>

                        <!-- Assigned Section -->
                        <div class="flex justify-between items-center h-8">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center">
                                    <p class="text-white mr-4">Assigned to : </p>
                                    <!-- Avatar F -->
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
                                        <span class="text-[#D9D9D9] text-sm">+ 2</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Dropdown Icon -->
                            <button class="text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="bg-dark rounded-3xl p-2">
                    <!-- Header dengan Logo Kotlin -->
                    <div class="bg-lightDark rounded-t-3xl h-36 mb-2 overflow-hidden">
                    </div>

                    <!-- Content -->
                    <div class="mx-3">

                        <!-- Progress Bar -->
                        <div class="flex gap-5 items-center">
                            <div class="h-2 bg-gray-200 rounded-full flex-1">
                                <div
                                    class="left-0 top-0 h-full w-1/2 bg-gradient-to-r from-orange-500 to-orange-400 rounded-full">
                                </div>
                            </div>
                            <span class="text-white text-sm">50 %</span>
                        </div>

                        <div class="flex justify-between">
                            <h3 class="text-white text-2xl font-semibold">Planning</h3>
                        </div>

                        <!-- Task Count -->
                        <div class="flex items-center gap-2">
                            <span class="text-white">10 task - </span>
                            <span class="text-orange-400">4 left</span>
                        </div>

                        <!-- Assigned Section -->
                        <div class="flex justify-between items-center h-8">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center">
                                    <p class="text-white mr-4">Assigned to : </p>
                                    <!-- Avatar F -->
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
                                        <span class="text-[#D9D9D9] text-sm">+ 2</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Dropdown Icon -->
                            <button class="text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="h-20"></div>
            </div>
        </div>

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
