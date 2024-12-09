<div class="flex mx-auto px-5">
    <p class="text-base font-semibold text-white">Contact</p>
</div>
<div class="flex-1 overflow-y-auto scrolled-text  px-4">
    <div class="flex flex-col px-3 space-y-5">
        @for ($i = 0; $i < 10; $i++)
            <x-contact-item></x-contact-item>
        @endfor
    </div>
</div>
