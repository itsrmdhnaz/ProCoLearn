<!-- Modal Container -->
<div id="modalAddRole" class="fixed inset-0 bg-dark bg-opacity-50 items-center justify-center hidden z-20">
    <!-- Modal Container -->
    <div class="bg-dark p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-white text-lg text-center font-semibold mb-4">Add Role to Project</h2>

        <hr>
        {{-- choose role --}}
        <div class="my-6 flex flex-wrap">
            {{-- role --}}
            <button>
                <div class="bg-purple-600 drop-shadow-lg px-3 py-1 gap-2 flex items-center rounded-full">
                    <i class="ti ti-brand-figma text-lg text-white"></i>
                    <span class="text-white text-xs font-medium">
                        UI / UX
                    </span>
                </div>
            </button>
        </div>

        <hr>


        <!-- Buttons -->
        <div class="flex justify-evenly mt-6">
            <button id="cancelAddRoleBtn"
                class="px-14 py-2 rounded-full bg-lightOrange shadow-shadowCustom text-white hover:bg-[#E7957E]">Cancel</button>
            <button
                class="px-14 py-2 rounded-full bg-orangeCustom shadow-shadowCustom text-white hover:bg-orange-600">Confirm</button>
        </div>
    </div>
</div>
