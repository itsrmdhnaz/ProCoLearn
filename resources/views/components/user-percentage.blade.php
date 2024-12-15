{{-- resources/views/components/user-percentage.blade.php --}}
<div class="w-full max-w-3xl mx-auto mt-4">
    <div class="relative">
        <!-- Progress Bar Container -->
        <div class="h-2 w-full flex rounded-full overflow-hidden mb-2">
            @foreach ($role as $item)
                <div style="width: {{ ($item['count'] / $total()) * 100 }}%" class="{{ $colors[$item['role']] }}"></div>
            @endforeach
        </div>

        <!-- Legend -->
        <div class="flex justify-evenly mt-2 text-sm">
            @foreach ($role as $item)
                <div class="flex items-center mr-8">
                    <div class="w-2 h-2 rounded-full {{ $colors[$item['role']] }} mr-2"></div>
                    <span class="text-gray-300">{{ $item['role'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
