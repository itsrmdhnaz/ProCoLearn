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
    {{-- menu overlay --}}
    <div id="overlay-menu" class="hidden fixed w-screen h-screen bg-dark bg-opacity-90 z-10 transition-all duration-300 opacity-0">
        <div class="px-4 py-5">
            <div class="flex justify-between">
                <img src="{{ asset('assets/images/logo-mobile.svg') }}" alt="logo" class="sm:hidden w-16">
                <i id="overlay-menu-close" class="ti ti-x cursor-pointer text-3xl text-center text-white h-auto w-10 justify-center flex flex-shrink-0"></i>
            </div>
            <div class="mt-6">
                <p class="text-base underline font-semibold text-white">Home</p>
                <ul class="mt-4 space-y-4">
                    <li>
                        <div class="flex justify-between">
                            <p class="text-base font-semibold text-light">Messages</p>
                            <i class="ti ti-chevron-right text-2xl text-center text-light"></i>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between">
                            <p class="text-base font-semibold text-light">Leaderboard</p>
                            <i class="ti ti-chevron-right text-2xl text-center text-light"></i>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between">
                            <p class="text-base font-semibold text-light">Project Group</p>
                            <i class="ti ti-chevron-right text-2xl text-center text-light"></i>
                        </div>
                    </li>
                    <li>
                        <div class="flex justify-between">
                            <p class="text-base font-semibold text-light">Profile</p>
                            <i class="ti ti-chevron-right text-2xl text-center text-light"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- screen --}}
    <div class="max-h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark">
        <div class="flex w-full h-screen">
            {{-- sidebar --}}
            <div class="hidden sm:flex flex-col flex-shrink-0">
                <div class="h-4"></div>
                <div class="bg-dark rounded-r-lg px-2 py-4 flex justify-between flex-col items-center flex-grow">
                    <img src="{{ asset('assets/images/Logo.svg') }}" alt="logo" class="w-11 fill-slate-300">
                    <div>
                        <ul class="space-y-6">
                            <div class="hover:bg-superLightDark py-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-home text-xl text-center text-white"></i>
                            </div>
                            <div class="hover:bg-superLightDark p-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-brand-wechat text-xl text-center text-white"></i>
                            </div>
                            <div class="hover:bg-superLightDark p-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-brand-google-analytics text-xl text-center text-white"></i>
                            </div>
                            <div class="hover:bg-superLightDark p-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-users-group text-xl text-center text-white"></i>
                            </div>
                            {{-- <img src="{{ asset('assets/images/people.svg') }}" alt="logo" class="w-8"> --}}
                        </ul>
                    </div>
                    <img src="{{ asset('assets/images/setting.svg') }}" alt="setting" class="w-8">
                </div>
                <div class="h-4"></div>
            </div>
            {{-- main --}}
            <div class="flex flex-1 flex-col overflow-auto scrolled-text px-4">
                <div class="flex w-full gap-3 flex-row my-4">
                    {{-- logo in mobile --}}
                    <img src="{{ asset('assets/images/logo-mobile.svg') }}" alt="logo" class="sm:hidden w-16">
                    {{-- search --}}
                    <div class="flex flex-1 justify-end" id="searchContainer">
                        <div class="flex gap-2 items-center transition-all duration-100 ease-in-out rounded-none border-0 py-0 px-0 sm:rounded-full sm:border-white sm:border-2 sm:py-2 sm:px-4 sm:gap-2 sm:flex-1" id="searchWrapper">
                            <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo" class="w-7 cursor-pointer sm:cursor-default" id="searchIcon">
                            <input type="text" placeholder="Search Your Study Group Here"
                                class="hidden bg-transparent w-0 sm:block sm:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                                id="searchInput">
                        </div>
                    </div>
                    {{-- filter --}}
                    <i
                        class="ti ti-filter-search font-normal text-3xl text-center text-white h-auto w-10 justify-center bg-dark hidden sm:flex items-center rounded-lg flex-shrink-0"></i>
                    {{-- profile --}}
                    <div class="w-10 h-10 bg-white hidden sm:flex justify-center rounded-full flex-shrink-0 mdm:hidden">
                    </div>
                    {{-- menu in mobile --}}
                    <i id="overlay-menu-button"
                        class="cursor-pointer ti ti-menu-4 font-normal text-3xl text-center text-white h-auto w-10 justify-center sm:hidden flex items-center rounded-lg flex-shrink-0"></i>
                </div>
                {{-- main content --}}
                <div class="scrolled-text overflow-scroll">
                    {{-- info content --}}
                    <div class="bg-white rounded-3xl w-full h-52 my-4">

                    </div>
                    {{-- my projects --}}
                    <div class="w-full">
                        <p class="text-xl font-semibold text-white mb-4">Your Project Group</p>
                        <div class="relative w-full">
                            <div class="flex gap-8 overflow-x-auto pb-4 scrolled-text">
                                <x-your-project-item>Mobile Developer With Kotlin</x-your-project-item>
                                <x-your-project-item>Mobile Developer With Kotlin</x-your-project-item>
                                <x-your-project-item>Mobile Developer With Kotlin</x-your-project-item>
                                <x-your-project-item>Mobile Developer With Kotlin</x-your-project-item>
                            </div>
                        </div>
                    </div>
                    {{-- leaderboard this month --}}
                    <div class="my-4">
                        <p class="text-xl font-semibold text-white mb-4">Leaderboard</p>
                        <div class="flex w-full flex-col xlm:flex-row py-5 px-3 rounded-3xl bg-dark">
                            <div class="xlm:w-1/2 flex xlm:gap-4 gap-2 lg:gap-6 xlm:justify-normal mx-auto">
                                {{-- card pm --}}
                                <div
                                    class="flex flex-col mt-20 h-fit gap-2 sm:gap-4 items-center bg-gradient-to-br from-[#7D7E7D] to-[#C1C5BF] rounded-3xl w-fit p-2 sm:p-5">
                                    <i
                                        class="ti ti-trophy-filled text-2xl text-center text-transparent bg-gradient-to-br from-[#C4C4C5] to-[#FAFAFA] bg-clip-text"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-2 sm:gap-8 text-white">
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Project</p>
                                            <p>5</p>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Points</p>
                                            <p>12</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col gap-2 sm:gap-4 h-fit items-center bg-gradient-to-br from-[#C7B332] to-[#968F62] rounded-3xl w-fit p-2 sm:p-5">
                                    <i
                                        class="ti ti-trophy-filled text-2xl text-center text-transparent bg-gradient-to-br from-[#FDB331] to-[#FFEB24] bg-clip-text"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-2 sm:gap-8 text-white">
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Project</p>
                                            <p>5</p>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Points</p>
                                            <p>12</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col mt-32 h-fit gap-2 sm:gap-4 items-center bg-gradient-to-br from-[#988470] to-[#EF9942] rounded-3xl w-fit p-2 sm:p-5">
                                    <i
                                        class="ti ti-trophy-filled text-2xl text-center text-transparent bg-gradient-to-br from-[#D39555] to-[#FA9B3B] bg-clip-text"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-2 sm:gap-8 text-white">
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Project</p>
                                            <p>5</p>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <p>Points</p>
                                            <p>12</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="xlm:w-1/2 sm:w-full xlm:border-l-[1px] sm:border-t-[1px] xlm:border-t-0 sm:mt-6 border-white px-3 overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="text-left text-sm font-bold text-lightDark2">
                                            <th class="px-4 py-2">Place</th>
                                            <th class="px-4 py-2">Name</th>
                                            <th class="px-4 py-2">Role</th>
                                            <th class="px-4 py-2">Project</th>
                                            <th class="px-4 py-2">Points</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-left text-sm font-bold text-white">
                                        <tr class="border-b-[1px] border-lightDark2">
                                            <td class="px-4 py-3 text-center">4</td>
                                            <td class="px-4 py-3">
                                                <div class="flex items-center gap-2">
                                                    <div class="rounded-full bg-white w-5 h-5 flex-shrink-0"></div>
                                                    <p>John Doe</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3">Developer</td>
                                            <td class="px-4 py-3 text-center">6</td>
                                            <td class="px-4 py-3 text-center">100</td>
                                        </tr>
                                        <tr class="border-b-[1px] border-lightDark2">
                                            <td class="px-4 py-3 text-center">5</td>
                                            <td class="px-4 py-3">
                                                <div class="flex items-center gap-2">
                                                    <div class="rounded-full bg-white w-5 h-5 flex-shrink-0"></div>
                                                    <p>Jane Smith</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3">Designer</td>
                                            <td class="px-4 py-3 text-center">4</td>
                                            <td class="px-4 py-3 text-center">95</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- profile bar --}}
            <div class="flex-col max-w-[20%] h-screen min-w-[281px] flex-shrink-0 hidden mdm:flex">
                <div class="h-4 flex flex-shrink-0"></div>
                <div class="flex-grow bg-dark rounded-l-lg flex items-center justify-end flex-col">
                    {{-- avatar --}}
                    <div class="border-[5px] border-orange-500 rounded-full mt-3">
                        <div class="w-20 h-20 bg-white rounded-full m-1 flex-shrink-0"></div>
                    </div>
                    {{-- name --}}
                    <p class="text-2xl font-semibold text-white mb-6 mt-3">
                        Fajar Sahab
                    </p>
                    {{-- social --}}
                    <div class="flex gap-3 mb-4">
                        <x-social-button>bell-minus-filled</x-social-button>
                        <x-social-button>bookmark-filled</x-social-button>
                        <x-social-button>user</x-social-button>
                    </div>
                    {{-- chart --}}
                    <div class="mb-3">
                        <div class="flex gap-3">
                            <x-day-chart :colors="[['color' => 'bg-orange-500', 'weight' => 4]]">Sun</x-day-chart>
                            <x-day-chart :colors="[
                                ['color' => 'bg-orange-500', 'weight' => 4],
                                ['color' => 'bg-white'],
                                ['color' => 'bg-black'],
                            ]">Mon</x-day-chart>
                            <x-day-chart :colors="[
                                ['color' => 'bg-white'],
                                ['color' => 'bg-orange-500', 'weight' => 7],
                                ['color' => 'bg-black'],
                            ]">Tu</x-day-chart>
                            <x-day-chart :colors="[
                                ['color' => 'bg-orange-500'],
                                ['color' => 'bg-black'],
                                ['color' => 'bg-white', 'weight' => 3],
                            ]">We</x-day-chart>
                            <x-day-chart :colors="[['color' => 'bg-orange-500'], ['color' => 'bg-black'], ['color' => 'bg-white']]">Th</x-day-chart>
                            <x-day-chart :colors="[
                                ['color' => 'bg-orange-500', 'weight' => 2],
                                ['color' => 'bg-black'],
                                ['color' => 'bg-white'],
                            ]">Fr</x-day-chart>
                            <x-day-chart :colors="[
                                ['color' => 'bg-purple-950', 'weight' => 6],
                                ['color' => 'bg-black'],
                                ['color' => 'bg-white'],
                            ]">Sat</x-day-chart>
                        </div>
                        <div class="mt-3 justify-between flex">
                            <x-tech-item tech="Kotlin" />
                            <x-tech-item tech="Flutter" />
                            <x-tech-item tech="Java" />
                            <x-tech-item tech="JavaScript" />
                        </div>
                    </div>
                    {{-- recommendation friends --}}
                    <div class="mx-3">
                        <div class="my-9 w-full">
                            <p class="text-sm font-bold text-white text-left">Make Your Friends</p>
                        </div>
                        <div class="overflow-y-auto flex-grow max-h-52 scrolled-text">
                            <x-friends-rec-card>Fajar Sahab</x-friends-rec-card>
                            <x-friends-rec-card>Muhammad Dhafa Ramadhani</x-friends-rec-card>
                            <x-friends-rec-card>Ramadhan Abdul Aziz</x-friends-rec-card>
                            <x-friends-rec-card>Ramadhan Abdul Aziz</x-friends-rec-card>
                            <x-friends-rec-card>Ramadhan Abdul Aziz</x-friends-rec-card>
                            <x-friends-rec-card>Ramadhan Abdul Aziz</x-friends-rec-card>
                        </div>
                    </div>
                </div>
                <div class="h-4 flex flex-shrink-0"></div>
            </div>
        </div>
    </div>
    <script src="js/home.js"></script>
</body>

</html>
