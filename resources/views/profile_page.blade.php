<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile user</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark h-screen">
    <div class="h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark flex flex-col">
        <!-- Header Container -->
        <div class="flex justify-between items-center mx-5 mt-4">
            <button class="">
                <i class="ti ti-chevron-left text-2xl text-white"></i>
            </button>
        </div>

        {{-- main --}}
        <div class="overflow-y-auto scrolled-text py-5">
            {{-- avatar --}}
            <div class="border-[5px] flex w-fit mx-auto border-orange-500 rounded-full mt-0 mdm:mt-3">
                <div class="w-20 h-20 sss:w-24 sss:h-24 mdm:w-20 mdm:h-20 bg-white rounded-full m-1 flex-shrink-0">
                </div>
            </div>
            {{-- name --}}
            <p class="text-2xl font-semibold text-white mb-2 mt-3 flex justify-center ">
                Fajar Sahab
            </p>
            <p class="text-sm font-normal text-white mb-6 flex justify-center ">
                PMO, front end developer
            </p>
            <div class="w-full flex justify-center">
                <button class="bg-orangeCustom px-4 py-1 rounded-lg">
                    <p class="text-white font-medium text-sm">Follow</p>
                </button>
                <div class="hidden">
                    <button class="bg-transparent border-white border px-4 py-1 rounded-lg">
                        <p class="text-white font-medium text-sm">Followed</p>
                    </button>
                    <button class="bg-orangeCustom px-4 py-1 rounded-lg">
                        <p class="text-white font-medium text-sm">Messages</p>
                    </button>
                </div>
            </div>

            {{-- info project user --}}
            <div class="mx-5 mt-4">
                <p class="text-sm font-bold text-white mb-2">Fajar Sahab’s Project Groups</p>
                <ul class="space-y-2 ml-4">
                    @for ($i = 0; $i < 3; $i++)
                        <li>
                            <div class="flex justify-between items-center">
                                <p class="text-white">Hitung Tabungan Android</p>
                                <button>
                                    <i class="ti ti-external-link text-2xl text-center text-orangeCustom"></i>
                                </button>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="mx-5 mt-4">
                <p class="text-sm font-bold text-white mb-2">Fajar Sahab’s Complete Project Groups</p>
                <ul class="space-y-3 ml-4">
                    @for ($i = 0; $i < 3; $i++)
                        <li>
                            <div class="flex justify-between items-center">
                                <p class="text-white">Hitung Tabungan Android</p>
                                <div
                                    class="bg-purple-600 drop-shadow-lg px-3 py-1 gap-2 flex items-center rounded-full">
                                    <i class="ti ti-brand-figma text-sm text-white"></i>
                                    <span class="text-white text-xs font-normal">
                                        UI / UX
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="mx-5 mt-4">
                <p class="text-sm font-bold text-white mb-2">Fajar Sahab’s Percentage</p>

                <x-user-percentage :role="[
                    ['role' => 'PMO', 'count' => 50],
                    ['role' => 'UI/UX', 'count' => 5],
                    ['role' => 'FE', 'count' => 25],
                ]" />
            </div>
        </div>
    </div>

</body>

</html>
