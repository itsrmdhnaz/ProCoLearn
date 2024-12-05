<div class="w-72 h-60 rounded-3xl flex-shrink-0">
    <div class="w-full h-[40%]">
        <div class="">
            <img src="{{ asset('assets/images/kotlin.png') }}" alt="project" class="bg-cover">
        </div>
    </div>
    <div class="w-full h-[60%] bg-dark rounded-b-3xl pt-6">
        <div class="flex justify-between mx-3">
            <p class="text-xl font-semibold text-white">{{ $slot }}</p>
            <div class="flex gap-2 mt-1">
                <p class="text-base font-semibold text-lightDark2">10</p>
                <i class="ti ti-users text-base text-center text-lightDark2"></i>
            </div>
        </div>
    </div>
</div>