<div class="fixed z-20 w-full bg-dark h-full mt-4 rounded-t-3xl hidden transform translate-y-full transition-transform duration-300 ease-out" id="new-chat-page">
    <div class="flex-1 ml-5 flex flex-col">
        <!-- Header -->
        <div class="grid grid-cols-3 mt-6">
            <div class="col-span-1"></div>
            <p class="col-span-1 text-base font-semibold text-white flex justify-center items-center">New Chat</p>
            <div class="col-span-1 flex justify-end">
                <i class="ti ti-x cursor-pointer text-3xl text-center text-white h-auto w-10 justify-center flex flex-shrink-0" id="new-chat-page-close"></i>
            </div>
        </div>

        <div class="h-7 w-full bg-lightDark rounded-md mt-6 mb-2"></div>

        <!-- Scrollable content -->
        <div class="overflow-y-auto scrolled-text flex-1">
            <x-new-chat-card>A</x-new-chat-card>
            <x-new-chat-card>B</x-new-chat-card>
        </div>
    </div>
    <div class="w-5 flex flex-col items-center justify-center">
       @include('chat.search_letter')
    </div>
</div>
