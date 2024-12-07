<div class="sm:flex sm:justify-between hidden items-center">
    <div class="flex mx-auto sm:mx-0 px-5 sm:gap-3">
        <p class="text-base font-semibold text-white sm:cursor-pointer">Chats</p>
        <p class="text-base font-semibold text-light2 sm:cursor-pointer">Contact</p>
    </div>
    {{-- search --}}
    <div class="flex flex-1 justify-end mr-5" id="searchContainerMessage">
        <div class="flex gap-2 items-center transition-all duration-100 border-0 ease-in-out rounded-none py-0 px-0 md:rounded-full md:border-white md:border-2 md:py-2 md:px-4 md:gap-2 md:flex-1"
            id="searchWrapperMessage">
            <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                class="w-7 cursor-pointer md:cursor-default" id="searchIconMessage">
            <input type="text" placeholder="Search Your Study Group Here"
                class="hidden bg-transparent w-0 md:block md:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                id="searchInputMessage">
        </div>
    </div>
    <div class="w-10 h-10 bg-white mr-5 hidden sm:flex justify-center rounded-full flex-shrink-0 mdm:hidden cursor-pointer" id="profile-button">
    </div>
</div>
<div class="flex-1 overflow-y-auto scrolled-text mt-4 px-4">
    <div class="flex flex-col px-3">
        @for ($i = 0; $i < 10; $i++)
            <x-message-item></x-message-item>
        @endfor
    </div>
</div>
