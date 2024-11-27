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
    <div class="max-h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark">
        {{-- sidebar --}}
        <div class="flex justify-between gap-x-4 w-full h-screen">
            <div class="flex flex-col">
                <div class="h-4"></div>
                <div class="bg-dark rounded-r-lg px-2 py-4 flex justify-between flex-col items-center flex-grow">
                    <img src="{{ asset('assets/images/Logo.svg') }}" alt="logo" class="w-11">
                    <div>
                        <ul class="space-y-6">
                            <div class="bg-superLightDark py-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-home text-xl text-center text-white"></i>
                            </div>
                            <div class="bg-superLightDark p-2 px-3 flex justify-center rounded-lg">
                                <i class="ti ti-brand-wechat text-xl text-center text-white"></i>
                            </div>
                            <div class="bg-superLightDark p-2 px-3 flex justify-center rounded-lg">
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
            <div class="flex flex-1 flex-col max-w-[67%]">
                <div class="flex w-full gap-3 flex-row my-4 ">
                    {{-- search --}}
                    <input type="text" placeholder="Search Your Study Group Here"
                        class="bg-transparent rounded-lg border-1 placeholder-white border-white py-2 px-4 w-full h-10">
                    {{-- filter --}}
                    <i
                        class="ti ti-filter-search font-normal text-3xl text-center text-white h-auto w-10 justify-center bg-dark flex items-center rounded-lg"></i>
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
                        <div class="flex w-full py-5 px-3 rounded-3xl bg-dark">
                            <div class="w-1/2 flex gap-1">
                                {{-- card pm --}}
                                <div
                                    class="flex flex-col mt-20 h-fit gap-4 items-center bg-slate-400 rounded-3xl w-fit p-5">
                                    <i class="ti ti-trophy-filled text-2xl text-center text-white"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-7">
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
                                <div class="flex flex-col gap-4 h-fit items-center bg-slate-400 rounded-3xl w-fit p-5">
                                    <i class="ti ti-trophy-filled text-2xl text-center text-white"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-7">
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
                                    class="flex flex-col mt-32 h-fit gap-4 items-center bg-slate-400 rounded-3xl w-fit p-5">
                                    <i class="ti ti-trophy-filled text-2xl text-center text-white"></i>
                                    <div class="rounded-full bg-white w-8 h-8 flex-shrink-0"></div>
                                    <p class="text-sm font-bold text-white">Fajar Sahab</p>
                                    <p class="text-sm font-normal text-white">Project Manager</p>
                                    <div class="flex gap-7">
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
                            <div class="w-1/2 border-l-2 border-white px-3">
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
                                        <tr class="border-b-2 border-lightDark2">
                                            <td class="px-4 py-2">4</td>
                                            <td class="px-4 py-2">
                                                <div class="flex items-center gap-2">
                                                    <div class="rounded-full bg-white w-5 h-5 flex-shrink-0"></div>
                                                    <p>John Doe</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-2">Developer</td>
                                            <td class="px-4 py-2">Web App</td>
                                            <td class="px-4 py-2">100</td>
                                        </tr>
                                        <tr class="border-b-2 border-lightDark2">
                                            <td class="px-4 py-2">5</td>
                                            <td class="px-4 py-2">
                                                <div class="flex items-center gap-2">
                                                    <div class="rounded-full bg-white w-5 h-5 flex-shrink-0"></div>
                                                    <p>Jane Smith</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-2">Designer</td>
                                            <td class="px-4 py-2">Mobile App</td>
                                            <td class="px-4 py-2">95</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- profile bar --}}
            <div class="flex flex-col max-w-[23%] h-screen">
                <div class="h-4 flex flex-shrink-0"></div>
                <div class="flex-grow bg-dark rounded-l-lg px-8 flex items-center justify-end flex-col">
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
                <div class="h-4 flex flex-shrink-0"></div>
            </div>
        </div>
    </div>
</body>

</html>
