<div class="mb-2">
    <p class="font-semibold text-sm text-white">{{ $slot }}</p>
    <div class="w-full bg-lightDark py-6 px-4 mt-1 rounded-md space-y-5">
        @for ($i = 0; $i < 4; $i++)
            <x-contact-item></x-contact-item>
        @endfor
    </div>
</div>
