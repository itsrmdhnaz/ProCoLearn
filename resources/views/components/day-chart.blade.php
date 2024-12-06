<div class="flex flex-col items-center">
    <div>
        @foreach($colors as $colorData)
            @for($i = 0; $i < $colorData['bars']; $i++)
                <div class="w-7 sss:w-10 mdm:w-7 sm:w-12 h-2 {{ $colorData['color'] }}"></div>
            @endfor
        @endforeach
    </div>
    <p class="text-xs font-semibold text-white mt-2">{{ $slot }}</p>
</div>
