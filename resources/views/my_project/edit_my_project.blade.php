@extends('layouts.settings_my_project')

@section('content')
    <!-- Form Content -->
    <form class="flex-1 space-y-6">
        <!-- Project Name -->
        <div>
            <label class="block mb-2">
                Project Name<span class="text-orangeCustom">*</span>
            </label>
            <input type="text" placeholder="Type your project name here..."
                class="w-full bg-transparent rounded-lg p-3 text-white placeholder-gray-400 border-white border focus:outline-none">
        </div>

        <!-- Project Description -->
        <div>
            <label class="block mb-2">
                Project Description<span class="text-orangeCustom">*</span>
            </label>
            <textarea placeholder="Type your project description here..."
                class="w-full bg-transparent rounded-lg p-3 text-white placeholder-gray-400 border-white border focus:outline-none min-h-[100px]"></textarea>
        </div>

        <!-- Roles -->
        <div>
            <label class="block mb-2">
                Roles In This Project<span class="text-orangeCustom">*</span>
            </label>
            <div class="flex gap-2 flex-wrap">
                <div class="bg-orangeCustom drop-shadow-lg px-3 py-1 gap-2 flex items-center rounded-full">
                    <i class="ti ti-flag text-lg text-white"></i>
                    <span class="text-white text-xs font-medium">
                        PMO
                    </span>
                </div>
                <div class="bg-purple-600 relative drop-shadow-lg px-3 py-1 gap-2 flex items-center rounded-full">
                    {{-- remove role --}}
                    <i
                        class="ti ti-x text-[10px] absolute -top-1 right-1 flex justify-center text-black bg-white rounded-sm px-[2px] py-[1.5px]"></i>
                    {{-- role --}}
                    <i class="ti ti-brand-figma text-lg text-white"></i>
                    <span class="text-white text-xs font-medium">
                        UI / UX
                    </span>
                </div>
                <button class="text-2xl text-orangeCustom"><i class="ti ti-plus text-2xl text-white"></i></button>
            </div>
        </div>

        <!-- Resources -->
        <div>
            <label class="block mb-2">
                Resources<span class="text-orangeCustom">*</span>
            </label>
            <input type="text" placeholder="Fill in what resources are used in your project here..."
                class="w-full bg-transparent rounded-lg p-3 text-white border-white border placeholder-gray-400 focus:outline-none">
            <p class="text-xs text-end text-lightDark2 mt-1">Use ',' to separate words, for example: flutter,
                laravel</p>
        </div>

        <!-- Image Upload -->
        <div>
            <div class="flex justify-between">
                <label class="block mb-2">Image</label>
                <div class="flex gap-2 items-center">
                    <i class="ti ti-pencil text-2xl text-orangeCustom"></i>
                    <i class="ti ti-trash text-2xl text-orangeCustom"></i>
                </div>
            </div>
            <div class="border-2 border-dashed border-lightDark2 rounded-lg p-8 flex items-center justify-center">
                <div class="text-center">
                    <i class="ti ti-photo-plus text-4xl text-lightDark2"></i>
                </div>
            </div>
        </div>
    @endsection
