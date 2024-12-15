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

        <div class="relative max-w-3xl h-64 mx-4">
            <!-- Gambar Latar Belakang -->
            <img src="assets/images/kotlin.png" alt="illustration" class="w-full h-full object-cover rounded-lg shadow-lg">

            <!-- Overlay Gelap -->
            <div class="absolute inset-0 bg-dark bg-opacity-50 rounded-lg"></div>

            <!-- Teks di Atas Gambar -->
            <div class="absolute inset-0 flex flex-col justify-center items-start p-6 text-white">
              <p class="text-lg mb-4">
                Every project is an opportunity to grow, learn, and collaborate.
                At <strong>LMS Project Group</strong>, we believe that success is not just about completing tasks,
                but also about how we work together!
              </p>
              <button class="bg-orangeCustom hover:bg-orange-600 text-white py-1 px-10 shadow-shadowCustom rounded-lg">
                Let's join us!
              </button>
            </div>
          </div>
    </div>
</body>

</html>
