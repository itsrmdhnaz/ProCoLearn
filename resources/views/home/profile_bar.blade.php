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
                @for ($i = 0; $i < 8; $i++)
                    <x-friends-rec-card>Fajar Sahab</x-friends-rec-card>
                @endfor
            </div>
        </div>
    </div>
    <div class="h-4 flex flex-shrink-0"></div>
</div>
