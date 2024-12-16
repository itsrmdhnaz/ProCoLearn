<div class="sm:flex h-screen bg-dark hidden">
    <!-- Sidebar -->
    <div class="h-full flex-shrink-0 flex flex-col">
        <div class="h-4"></div>
        <div class="h-full justify-between w-16 px-2 py-4 bg-dark border-r border-light2 rounded-r-lg">
            <!-- Logo -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/Logo.svg') }}" alt="logo" class="w-11">
            </div>

            <!-- Navigation Icons -->
            <ul class="flex flex-col space-y-6 items-center">
                <li class="hover:bg-superLightDark px-3 py-2 rounded-lg">
                    <i class="text-4xl text-white ti ti-home"></i>
                </li>
                <li class="hover:bg-superLightDark px-3 py-2 rounded-lg">
                    <i class="text-4xl text-white ti ti-brand-wechat"></i>
                </li>
                <li class="hover:bg-superLightDark px-3 py-2 rounded-lg">
                    <i class="text-4xl text-white ti ti-brand-google-analytics"></i>
                </li>
                <li class="hover:bg-superLightDark px-3 py-2 rounded-lg">
                    <i class="text-4xl text-white ti ti-shield"></i>
                </li>
                <li class="hover:bg-superLightDark px-3 py-2 rounded-lg">
                    <i class="text-4xl text-white ti ti-users-group"></i>
                </li>
            </ul>

            <!-- Settings Icon -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/setting.svg') }}" alt="setting" class="w-8">
            </div>
        </div>
        <div class="h-4"></div>
    </div>

    <!-- Sidebar Content -->
    <div class="flex-shrink-0 flex flex-col justify-between w-48 bg-dark border-r border-light2 px-4 py-6 text-white">
        <h2 class="text-lg font-bold mb-6">Project Groups</h2>

        <!-- Favorites Section -->
        <div class="mb-8">
            <div class="h-px bg-gray-500 mt-2"></div>
            <h3 class="text-sm font-semibold">Favorites</h3>
        </div>

        <!-- Your Project Section -->
        <div>
            <div class="h-px bg-gray-500 mt-2"></div>
            <h3 class="text-sm font-semibold mb-2">Your Project</h3>
            <div class="flex items-center space-x-2 text-gray-300 cursor-pointer">
                <span class="text-xl">+</span>
                <span>Create New</span>
            </div>
        </div>
    </div>
</div>
