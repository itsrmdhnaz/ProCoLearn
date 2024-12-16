<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto scrolled-text px-4">
    <div class="space-y-4">
        {{-- Perulangan Card --}}
        @for ($i = 0; $i < 5; $i++)
            {{-- card --}}
            <div class="bg-dark rounded-3xl p-2">
                <!-- Header dengan Logo Kotlin -->
                <div class="relative bg-lightDark rounded-t-3xl h-36 mb-2 overflow-hidden">
                    <div
                        class="m-4 bg-purple-600 bg-opacity-70 drop-shadow-lg px-3 py-1 gap-2 absolute right-1 flex items-center rounded-full mb-4">
                        <i class="ti ti-brand-figma text-2xl text-white"></i>
                        <span class="text-white text-base font-semibold">
                            UI / UX
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="mx-3">

                    <!-- Progress Bar -->
                    <div class="flex gap-5 items-center">
                        <div class="h-2 bg-gray-200 rounded-full flex-1">
                            <div
                                class="left-0 top-0 h-full w-1/2 bg-gradient-to-r from-orange-500 to-orange-400 rounded-full">
                            </div>
                        </div>
                        <span class="text-white text-sm">50 %</span>
                    </div>

                    <div class="flex justify-between">
                        <h3 class="text-white text-2xl font-semibold">Planning</h3>
                    </div>

                    <!-- Task Count -->
                    <div class="flex items-center gap-2">
                        <span class="text-white">10 task - </span>
                        <span class="text-orange-400">4 left</span>
                    </div>

                    <!-- Assigned Section -->
                    <div class="flex justify-between items-center h-8">
                        <div class="flex items-center gap-2">
                            <div class="flex items-center">
                                <p class="text-white mr-4">Assigned to : </p>
                                <!-- Avatar F -->
                                <div class="flex items-center gap-2 h-full" id="assignedTo{{ $i }}">
                                    <div class="relative w-8 h-6">
                                        <div class="absolute left-2 w-6 h-6 bg-orange-400 rounded-full"></div>
                                        <div
                                            class="absolute left-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                            <span class="text-white text-sm">F</span>
                                        </div>
                                    </div>
                                    <span class="text-[#D9D9D9] text-sm">+ 2</span>
                                </div>
                            </div>
                        </div>

                        <!-- Dropdown Icon -->
                        <button class="text-gray-400" id="dropdownButton{{ $i }}">
                            <i class="ti ti-chevron-down text-2xl"></i>
                        </button>
                    </div>

                    <!-- Hidden Dropdown Content -->
                    <div class="hidden mt-2 flex-wrap" id="assignedToContainer{{ $i }}">
                        @for ($j = 0; $j < 5; $j++)
                            <div class="flex items-center border-2 border-lightDark p-1 rounded-2xl w-fit gap-1">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-xs text-white">
                                    F</div>
                                <p class="text-light text-xs font-medium">Fajar Sahab</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
        <div class="h-20"></div>
    </div>
</div>
