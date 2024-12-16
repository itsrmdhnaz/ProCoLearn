<!-- Content -->
<div class="flex-1 p-4">
    <!-- Progress Timeline -->
    <form action="{{ route("project.start_project", $project) }}" method="POST" class="flex flex-col default-form" function-callback="startProject">
        @csrf
        <!-- Setup Project -->
        <div class="flex">
            <!-- Timeline with checkmark -->
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-6 h-6 rounded-full bg-[#38CA49]">
                    <i class="text-sm text-white ti ti-check"></i>
                </div>
                <!-- Vertical line -->
                <div class="w-0.5 h-16 bg-gray-400"></div>
            </div>
            <!-- Text -->
            <span class="ml-3 text-white">Setup Project</span>
        </div>

        <!-- Complete Contribute -->
        <div class="flex">
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-6 h-6 rounded-full {{ $canStart ? "bg-[#38CA49]"  : "bg-light2"}}">
                    <i class="text-sm text-white ti ti-check"></i>
                </div>
            </div>
            <span class="ml-3 text-white">Complete Contribute</span>
        </div>

        <!-- Menampilkan kebutuhan yang belum terpenuhi -->
        @if (!empty($unfulfilledRoles))
            <div class="p-4 mt-6 bg-gray-200 shadow-lg rounded-xl">
                <div class="flex items-center justify-center gap-2">
                    <div class="flex flex-col items-center gap-2">
                        <i class="text-3xl ti ti-alert-octagon-filled text-danger"></i>
                        <span class="font-medium text-black">
                            Group still needs
                            {{ implode(', ', array_map(fn($role) => $role['role'], $unfulfilledRoles)) }}
                        </span>
                    </div>
                </div>
            </div>
        @else
            <div class="p-4 mt-6 bg-gray-200 shadow-lg rounded-xl">
                <div class="flex items-center justify-center gap-2">
                    <div class="flex flex-col items-center gap-2">
                        <div class="flex items-center justify-center w-6 h-6 rounded-full bg-[#38CA49]">
                            <i class="text-sm text-white ti ti-check"></i>
                        </div>
                        <!-- Vertical line -->
                        <span class="font-medium text-black">
                            Complete
                        </span>
                    </div>
                </div>
            </div>
        @endif

        <!-- Tombol Start -->
        <button type="submit" class="p-2  mt-4 w-full shadow-lg {{ (!empty($unfulfilledRoles)) ? "bg-light2" : "bg-orangeCustom" }} rounded-xl" {{ $canStart ? '' : 'disabled' }} style="opacity: {{ $canStart ? '1' : '0.5' }};">
            <div class="flex justify-center">
                <div class="text-xl font-bold text-white">
                    Start
                </div>
            </div>
        </button>
    </form>
</div>
