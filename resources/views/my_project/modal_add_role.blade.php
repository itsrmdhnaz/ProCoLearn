<!-- Modal Container -->
<div id="modalAddRole" class="fixed inset-0 z-20 items-center justify-center hidden bg-opacity-50 bg-dark">
    <!-- Modal Container -->
    <div class="w-full max-w-md p-6 rounded-lg shadow-lg bg-dark">
        <h2 class="mb-4 text-lg font-semibold text-center text-white">Add Role to Project</h2>

        <hr>
        {{-- choose role --}}
        <div class="flex flex-wrap items-center justify-center gap-4 my-6">
            {{-- role --}}
            @foreach ($roles->where("name", '!=', "PMO") as $role)
                <button type="button" onclick="setRole({{ $role }})"
                    class="flex items-center gap-2 px-3 py-1 transition-colors duration-200 rounded-full drop-shadow-lg focus:bg-transparent focus:outline-none focus:ring-2 focus:ring-gray-300 active:bg-transparent active:border active:border-gray-300"
                    style="background-color: {{ $role->colour_icon }};">
                    <div class="flex items-center gap-2">
                        <i class="text-lg text-white {{ $role->icon }}"></i>
                        <span class="text-xs font-medium text-white">
                            {{ $role->name }}
                        </span>
                    </div>
                </button>
            @endforeach
        </div>

        <hr>


        <!-- Buttons -->
        <div class="flex mt-6 justify-evenly">
            <button id="cancelAddRoleBtn" type="button"
                class="px-14 py-2 rounded-full bg-lightOrange shadow-shadowCustom text-white hover:bg-[#E7957E]">Cancel</button>
            <button type="button" onclick="addRole()"
                class="py-2 text-white rounded-full px-14 bg-orangeCustom shadow-shadowCustom hover:bg-orange-600">Confirm</button>
        </div>
    </div>
</div>
