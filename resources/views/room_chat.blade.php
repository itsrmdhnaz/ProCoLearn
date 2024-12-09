<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coba</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-lightDark min-h-screen text-white">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 bg-darkGray">
            <div class="flex items-center gap-3">
                <button class="text-2xl">
                    <i class="ti ti-chevron-left"></i>
                </button>
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-white"></div>
                    <span class="font-medium">Fajar Sahab</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex flex-1 justify-end sm:hidden" id="searchContainer">
                    <div class="flex gap-2 items-center transition-all duration-100 border-0 ease-in-out rounded-none py-0 px-0 md:rounded-full md:border-white md:border-2 md:py-2 md:px-4 md:gap-2 md:flex-1"
                        id="searchWrapper">
                        <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                            class="w-6 cursor-pointer md:cursor-default" id="searchIcon">
                        <input type="text" placeholder="Search Your Study Group Here"
                            class="hidden bg-transparent w-0 md:block md:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                            id="searchInput">
                    </div>
                </div>
                <button class="text-2xl">
                    <i class="ti ti-menu-4"></i>
                </button>
            </div>
        </div>

        <!-- Chat Container -->
        <div class="p-4 flex flex-col gap-4">
            <!-- Today Label -->
            <div class="bg-dark rounded-2xl py-1 px-5 w-fit flex mx-auto">
                <p class="text-xs text-white text-center">Today</p>
            </div>

            <!-- Orange Message -->
            <div class="flex flex-col items-end space-y-2">
                <div class="bg-orangeCustom rounded-t-2xl rounded-bl-2xl p-3 max-w-[80%] w-fit">
                    <p class="text-sm">Eh Li yang chat room udah?</p>
                </div>
                <p class="text-[10px] text-right text-gray-200">20:06 PM</p>
            </div>

            <!-- Gray Messages -->
            <div class="flex items-start flex-col space-y-2">
                <div class="bg-dark rounded-b-2xl rounded-tr-2xl p-3 max-w-[80%] w-fit">
                    <p class="text-sm">Waduh, Gua belum Brooo</p>
                </div>
                {{-- <p class="text-[10px] text-right text-gray-400">20:07 PM</p> --}}
            </div>

            <div class="flex items-start flex-col space-y-2">
                <div class="bg-dark rounded-b-2xl rounded-tr-2xl p-3 max-w-[80%] w-fit">
                    <p class="text-sm">Nanti dah gua kerjain maleman lagi ada perlu dulu</p>
                </div>
                <p class="text-[10px] text-right text-gray-400">20:07 PM</p>
            </div>
        </div>

        <!-- Input Area -->
        <div class="fixed bottom-0 left-0 right-0 p-4 bg-dark">
            <div class="flex items-center gap-2">
                <div class="flex-1 rounded-3xl bg-lightDark">
                    <input type="text" class="w-full bg-transparent outline-none text-white border-none focus:ring-0" placeholder="Type a message...">
                </div>
                <button class="w-9 h-9 rounded-lg bg-orangeCustom flex items-center justify-center">
                    <i class="ti ti-send text-lg"></i>
                </button>
            </div>
        </div>
    </div>

</body>

</html>
