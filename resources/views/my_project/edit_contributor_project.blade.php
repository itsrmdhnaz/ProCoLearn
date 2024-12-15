@extends('layouts.settings_my_project')

@section('content')
    <div class="flex-1 space-y-6">
        <div class="space-y-4">
            <div class="bg-purple-600 drop-shadow-lg px-3 w-fit py-1 gap-2 flex items-center rounded-full">
                <i class="ti ti-brand-figma text-lg text-white"></i>
                <span class="text-white text-xs font-medium">
                    UI / UX
                </span>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                    <span class="text-white text-sm">M</span>
                </div>
                <p class="font-semibold text-base text-white">Muhammad Dhafa Ramadhani</p>
            </div>
            <div class="flex justify-between">
                <p class="font-semibold text-base text-light2">Empty</p>
                <i class="ti ti-plus text-2xl text-white"></i>
            </div>
        </div>
    </div>
@endsection
