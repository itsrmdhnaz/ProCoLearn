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


        <!-- Header Container -->
        <div class="w-full ml-1 mt-4 pr-5 bg-gradient-to-r from-[#FC7A56] via-[#fc7a5682] to-[#968f6200]">
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
            </div>
        </div>

        <p class="text-white font-semibold text-base mb-4 mt-4 ml-5">Request</p>

        <div class="flex-1 overflow-y-auto scrolled-text">
            <!-- Request Cards Container -->
            <div class="px-5 space-y-9 ">
                <!-- First Card -->
                <div class="border-b-2 pb-3">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-white rounded-full flex-shrink-0"></div>
                        <div class="flex-1">
                            <p>
                                <span class="text-white font-semibold text-xs">Muhammad Dhafa Ramadhani </span>
                                <span class="text-white font-normal text-xs">want to be </span>
                                <span class="text-orangeCustom font-semibold text-xs">UI / UX</span>
                            </p>
                            <p class="text-white font-normal text-xs">2 days ago</p>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-4 ml-14">
                        <button
                            class="px-6 py-1 bg-orangeCustom font-medium hover:bg-[#e66e4c] text-white rounded-md transition-colors">
                            Accept
                        </button>
                        <button
                            class="px-6 py-1 bg-lightOrange font-medium hover:bg-[#F8C0B1] text-white rounded-md transition-colors">
                            Deny
                        </button>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="border-b-2 pb-3">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-white rounded-full flex-shrink-0"></div>
                            <div class="flex-1">
                                <p>
                                    <span class="text-white font-semibold text-xs">Muhammad Dhafa Ramadhani </span>
                                    <span class="text-white font-normal text-xs">want to be </span>
                                    <span class="text-orangeCustom font-semibold text-xs">UI / UX</span>
                                </p>
                                <p class="text-white font-normal text-xs">2 days ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 ml-14">
                        <p class="text-white mb-2 font-medium">Note</p>
                        <p class="text-white font-normal">
                            Saya ingin menjadi ui ux anda karena saya semangat sekali booooyyy
                        </p>
                    </div>

                    <div class="flex gap-2 mt-4 ml-14">
                        <button
                            class="px-6 py-1 bg-orangeCustom font-medium hover:bg-[#e66e4c] text-white rounded-md transition-colors">
                            Accept
                        </button>
                        <button
                            class="px-6 py-1 bg-lightOrange font-medium hover:bg-[#F8C0B1] text-lightDark rounded-md transition-colors">
                            Deny
                        </button>
                    </div>
                </div>
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
        </div>
    </div>
</body>

</html>
