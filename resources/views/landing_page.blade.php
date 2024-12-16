<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>landing</title>

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

        <div class="overflow-y-auto scrolled-text">
            <div class="relative h-60 mx-4">
                <!-- Gambar Latar Belakang -->
                <img src="assets/images/kotlin.png" alt="illustration"
                    class="w-full h-full object-cover rounded-lg shadow-lg">

                <!-- Overlay Gelap -->
                <div class="absolute inset-0 bg-dark bg-opacity-50 rounded-lg"></div>

                <!-- Teks di Atas Gambar -->
                <div class="absolute inset-0 flex flex-col justify-center items-start p-6 text-white">
                    <p class="text-lg lg:text-3xl mb-4 lg:mb-8">
                        Every project is an opportunity to grow, learn, and collaborate.
                        At <strong>LMS Project Group</strong>, we believe that success is not just about completing
                        tasks,
                        but also about how we work together!
                    </p>
                    <button
                        class="bg-orangeCustom hover:bg-orange-600 text-white py-1 px-10 shadow-shadowCustom rounded-lg">
                        Let's join us!
                    </button>
                </div>
            </div>

            <div class="mt-6 lg:mt-10 bg-dark p-3 w-fit mx-auto rounded-2xl">
                <i class="ti ti-report-analytics text-5xl lg:text-7xl text-center text-white"></i>
            </div>

            <p class="text-white text-justify mt-6 lg:mt-10 px-4 text-xs font-medium lg:text-2xl">
                Project Group is the leading solution for learning management and collaborative projects. Our
                application is designed to make it easier for teams to share information, manage tasks, and collaborate
                efficiently on one integrated platform. With the advanced features we offer, every team member can work
                better together and achieve maximum results.
            </p>

            <p class="text-white text-justify mt-6 lg:mt-10 px-4 text-xs font-semibold lg:text-2xl">
                Top Project Group
            </p>

            <div class="mt-5 flex gap-8 mx-4 overflow-x-auto scrolled-text">
                @for ($i = 0; $i < 3; $i++)
                    <div class="bg-dark rounded-3xl min-w-64 p-2">
                        <div class="bg-lightDark relative rounded-t-3xl h-36 mb-2">
                            <img src="{{ asset('assets/images/kotlin.png') }}"
                                class="w-full h-full object-cover rounded-t-3xl" alt="">
                            <span
                                class="absolute bg-green-400 bg-opacity-70 drop-shadow-lg text-white px-3 py-1 top-2 left-2 rounded-full text-sm mb-4">
                                finished
                            </span>
                        </div>
                        <div class="space-y-2 mx-3">
                            <div class="flex justify-between">
                                <h3 class="text-white text-xl font-semibold">To Do APP</h3>
                            </div>
                            <p class="text-[#D9D9D9] w-1/2 overflow-hidden text-ellipsis whitespace-nowrap">Flutter,
                                Laravel, UI</p>
                            <div class="flex justify-end items-center h-8">
                                <div class="flex items-center space-x-3">
                                    <!-- Bookmark Icon -->
                                    <i class="ti ti-bookmark text-orangeCustom text-2xl"></i>
                                    <i class="ti ti-rosette-discount-check-filled text-orangeCustom text-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="mt-6 lg:mt-10 bg-dark p-3 w-fit mx-auto rounded-2xl">
                <i class="ti ti-users-group text-5xl lg:text-7xl text-center text-white"></i>
            </div>

            <p class="text-white text-justify mt-6 lg:mt-10 px-4 text-xs font-medium lg:text-2xl">
                Want to know how professionals and top creators run their projects? At LMS Project Group, you can also
                see and learn from top creators who have successfully managed various group projects. Get inspired by
                how they build team collaboration, overcome challenges, and achieve success.
            </p>

            <p class="text-white text-justify mt-6 px-4 text-xs font-semibold lg:text-2xl">
                Follow their journey, learn their strategies, and apply them to your own project success!
            </p>

            <div class="w-0.5 mx-auto h-16 lg:h-28 mt-6 lg:mt-10 bg-light"></div>

            <p class="text-white text-justify mt-6 lg:mt-10 px-4 text-xs font-semibold lg:text-2xl">
                Popular Creator Project Group
            </p>

            <div class="my-5 flex gap-8 mx-4 overflow-x-auto scrolled-text">
                @for ($i = 0; $i < 3; $i++)
                    <div>
                        <div class="w-32 lg:w-72 lg:h-96 h-44 bg-dark rounded-3xl">
                            <img src="{{ asset('assets/images/kotlin.png') }}"
                                class="w-full h-full object-cover rounded-3xl" alt="">
                        </div>
                        <p class="mt-4 text-white text-xs lg:text-xl font-semibold">Dhafa Ramadhani</p>
                        <p class="text-white text-xs lg:text-xl font-normal">Front-end</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</body>

</html>
