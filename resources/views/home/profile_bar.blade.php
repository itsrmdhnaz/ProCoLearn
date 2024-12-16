<div class="flex-col max-w-[20%] h-screen min-w-[281px] flex-shrink-0  mdm:flex hidden" id="profile-bar">
    <div class="h-4 flex flex-shrink-0"></div>
    <div
        class="flex-grow sm:hidden mdm:flex bg-dark rounded-l-lg flex mdm:items-center justify-end flex-col fixed mdm:static inset-0 mdm:inset-auto w-full mdm:w-auto z-20 mdm:z-0 ">
        <i class="ti ti-chevron-left sm:hidden cursor-pointer text-3xl text-center text-white mt-6 flex justify-start mx-6 flex-shrink-0"
            id="overlay-menu-close-mobile"></i>
        <i
            class="ti ti-x hidden cursor-pointer mdm:hidden text-3xl text-center text-white mt-6 sm:flex justify-end mx-6 flex-shrink-0"></i>
        <div class="flex-shrink-0 w-full">
            {{-- avatar --}}
            <div class="border-[5px] flex w-fit mx-auto border-orange-500 rounded-full mt-0 mdm:mt-3">
                <div class="w-20 h-20 sss:w-24 sss:h-24 mdm:w-20 mdm:h-20 bg-white rounded-full m-1 flex-shrink-0"></div>
            </div>
            {{-- name --}}
            <p class="text-2xl font-semibold text-white mb-6 mt-3 flex justify-center ">
                Fajar Sahab
            </p>
            {{-- social --}}
            <div class="flex gap-3 mb-4 justify-center">
                <x-social-button>bell-minus-filled</x-social-button>
                <x-social-button>bookmark-filled</x-social-button>
                <x-social-button>user</x-social-button>
            </div>
            {{-- chart --}}
            <div class="mb-1 mdm:mb-3">
                <div class="flex mdm:gap-3 justify-evenly sm:gap-5 sm:justify-center">
                    <x-day-chart :colors="[['color' => 'bg-orange-500', 'weight' => 4]]">
                        Sun
                    </x-day-chart>
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
                <div class="mt-3 justify-around flex">
                    <x-tech-item tech="Kotlin" />
                    <x-tech-item tech="Flutter" />
                    <x-tech-item tech="Java" />
                    <x-tech-item tech="JavaScript" />
                </div>
            </div>
        </div>
        {{-- recommendation friends --}}
        <div class="flex-1 flex flex-col min-h-0 mx-3">
            <div class="my-7 w-full">
                <p class="text-sm font-bold text-white text-left">Make Your Friends</p>
            </div>
            <div class="overflow-y-auto mdm:max-h-56 scrolled-text">
                @for ($i = 0; $i < 8; $i++)
                    <x-friends-rec-card>Fajar Sahab</x-friends-rec-card>
                @endfor
            </div>
        </div>
        <div class="h-4 mdm:hidden"></div>
    </div>


    {{-- tablet middle --}}
    <div class="bg-lightDark sm:flex gap-3 fixed inset-0 h-screen w-full z-20 hidden mdm:hidden">
        <div class="h-screen">
            <x-sidebar></x-sidebar>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            <div class="h-4 shrink-0"></div>
            <div class="bg-dark h-full overflow-hidden flex flex-col rounded-l-lg">
                {{-- <i
                    class="ti ti-chevron-left sm:hidden cursor-pointer text-3xl text-center text-white mt-6 flex justify-start mx-6 flex-shrink-0"></i> --}}
                <i class="ti ti-x hidden cursor-pointer mdm:hidden text-3xl text-center text-white mt-6 sm:flex justify-end mx-6 flex-shrink-0"
                    id="profile-bar-close-tablet"></i>

                <!-- Profile section dengan flex-shrink-0 -->
                <div class="flex-shrink-0 w-full h-fit">
                    {{-- avatar --}}
                    <div class="border-[5px] flex w-fit mx-auto border-orange-500 rounded-full mt-0 mdm:mt-3">
                        <div
                            class="w-20 h-20 sss:w-24 sss:h-24 mdm:w-20 mdm:h-20 bg-white rounded-full m-1 flex-shrink-0">
                        </div>
                    </div>

                    {{-- name --}}
                    <p class="text-2xl font-semibold text-white mb-6 mt-3 flex justify-center ">
                        Fajar Sahab
                    </p>

                    {{-- social --}}
                    <div class="flex gap-3 mb-4 justify-center">
                        <x-social-button>bell-minus-filled</x-social-button>
                        <x-social-button>bookmark-filled</x-social-button>
                        <x-social-button>user</x-social-button>
                    </div>

                    {{-- chart --}}
                    <div class="mb-1 mdm:mb-3">
                        <div class="flex mdm:gap-3 justify-evenly sm:gap-5 sm:justify-center">
                            <x-day-chart :colors="[['color' => 'bg-orange-500', 'weight' => 4]]">
                                Sun
                            </x-day-chart>
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
                        <div class="mt-3 justify-around flex">
                            <x-tech-item tech="Kotlin" />
                            <x-tech-item tech="Flutter" />
                            <x-tech-item tech="Java" />
                            <x-tech-item tech="JavaScript" />
                        </div>
                    </div>

                    {{-- recommendation friends --}}
                    <div class="mx-3">
                        <div class="my-7 w-full grid grid-cols-12">
                            <p class="text-sm font-bold text-white text-left col-span-9">Make Your Friends</p>
                            <i
                                class="ti ti-reload cursor-pointer text-xl text-end text-white flex-shrink-0 mr-2 col-span-3"></i>
                        </div>
                        <div class="overflow-x-auto scrolled-text" id="my-friends-tablet">
                            <div class="grid grid-rows-2 grid-flow-col gap-6 w-max">
                                @for ($i = 0; $i < 8; $i++)
                                    <x-friends-rec-card>Fajar Sahab</x-friends-rec-card>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-4 shrink-0"></div>
        </div>
        <div></div>
    </div>
    <div class="h-4 flex flex-shrink-0"></div>
</div>
