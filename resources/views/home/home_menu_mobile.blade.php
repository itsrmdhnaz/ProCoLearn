<div id="overlay-menu" class="hidden fixed w-screen h-screen bg-dark bg-opacity-90 z-10 transition-all duration-300 opacity-0">
    <div class="px-4 py-4">
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
                <li id="profile-menu" class="cursor-pointer">
                    <div class="flex justify-between">
                        <p class="text-base font-semibold text-light">Profile</p>
                        <i class="ti ti-chevron-right text-2xl text-center text-light"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
