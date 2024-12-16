<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMO Group Project</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen bg-lightDark">
    <!-- Main Container -->
    <div class="flex flex-col h-screen mx-auto overflow-hidden max-w-screen-2xl bg-lightDark">
        <!-- Header Section -->
        <div class="flex flex-row w-full gap-3 px-4 my-4">
            {{-- logo in mobile --}}
            <img src="{{ asset('assets/images/logo-mobile.svg') }}" alt="logo" class="w-24 sm:hidden">
            {{-- search --}}
            <div class="flex justify-end flex-1 sm:hidden" id="searchContainer">
                <div class="flex items-center gap-2 px-0 py-0 transition-all duration-100 ease-in-out border-0 rounded-none md:rounded-full md:border-white md:border-2 md:py-2 md:px-4 md:gap-2 md:flex-1"
                    id="searchWrapper">
                    <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                        class="cursor-pointer w-7 md:cursor-default" id="searchIcon">
                    <input type="text" placeholder="Search Your Study Group Here"
                        class="hidden w-0 p-0 text-white transition-all duration-300 bg-transparent border-0 md:block md:w-full placeholder-whitext-white focus:outline-none focus:ring-0 caret-white"
                        id="searchInput">
                </div>
            </div>
            <i id="overlay-menu-button"
                class="flex items-center justify-center flex-shrink-0 w-10 h-auto text-3xl font-normal text-center text-white rounded-lg cursor-pointer ti ti-menu-4 sm:hidden"></i>
        </div>

        <!-- Header Container -->
        <div class="w-full ml-1  pr-5 bg-gradient-to-r from-[#FC7A56] via-[#fc7a5682] to-[#968f6200]">
            <!-- Content -->
            <div class="flex items-center justify-between py-1 ">
                <div class="flex items-center gap-4">
                    {{-- back button --}}
                    <button class="p-1 text-white">
                        <i id="overlay-menu-button"
                            class="flex-shrink-0 text-3xl font-normal text-center text-white ti ti-chevron-left"></i>
                    </button>
                    {{-- title --}}
                    <h1 class="text-lg font-medium text-white">APP {{ $project->name }}</h1>
                </div>
                <!-- Share Icon -->
                <button class="p-1 text-white">
                    <i id="overlay-menu-button"
                        class="flex-shrink-0 text-3xl font-normal text-center text-white ti ti-share"></i>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-between w-full gap-4 px-4 py-4">
            <!-- Dropdown -->
            {{-- <div class="relative">
                <button class="flex items-center w-4/5 gap-2 px-4 py-1 text-white border border-white rounded-lg">
                    <span class="overflow-hidden text-xs font-medium text-ellipsis whitespace-nowrap">App Tukang
                        bangunan</span>
                    <i class="text-2xl ti ti-chevron-down"></i>
                </button>
                <!-- Dropdown menu (hidden by default) -->
                <div class="absolute left-0 hidden w-48 mt-2 bg-gray-800 rounded-lg shadow-lg">
                    <!-- Add dropdown items here -->
                </div>
            </div> --}}

            <!-- New Assignment Button -->
            <button id="new-assignment-button"
                class="flex items-center gap-2 px-4 py-1 text-white rounded-lg bg-coral-500 hover:bg-coral-600 bg-orangeCustom drop-shadow-xl">
                <i class="text-2xl ti ti-plus"></i>
                <span>New Assignment</span>
            </button>

            {{-- modal new assignment --}}
            @include('task.modal_new_task')
        </div>


        <!-- Right Side -->
        <div class="flex items-center gap-4">

            <!-- Setting Icon -->
            <button class="">
                <i class="text-3xl ti ti-settings-code text-orangeCustom"></i>
            </button>
            <!-- Mail Icon -->
            <button class="relative">
                <span class="absolute top-1 right-0 w-3 h-3 bg-[#38CA49] rounded-full"></span>
                <i class="text-3xl ti ti-mail text-orangeCustom"></i>
            </button>
            <!-- Chat Icon -->
            <button class="">
                <i class="text-3xl ti ti-messages text-orangeCustom"></i>
            </button>
        </div>
    </div>

    @if ($project->status == 'not_started')
        @include('my_project.start_page')
    @else
        @include('my_project.main_content')
    @endif

    <!-- Bottom Navigation -->
    <div class="flex items-end justify-around p-4 bg-dark">
        <button>
            <i class="text-4xl text-white ti ti-world-code"></i>
        </button>
        <button>
            <i class="text-3xl ti ti-users-group text-lightDark2"></i>
        </button>
        <button>
            <i class="text-3xl ti ti-world-star text-lightDark2"></i>
        </button>

        <!-- Plus Button -->
        <button class="fixed p-4 shadow-lg bg-orangeCustom rounded-2xl right-10 bottom-24">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
            </svg>
        </button>
    </div>
    </div>

    <script>
        function startProject() {
            history.replaceState(null, '', location.href);

            location.reload();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/content.js') }}"></script>
    <script src="{{ asset('js/my_project.js') }}"></script>
</body>

</html>
