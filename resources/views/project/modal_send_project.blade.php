<!-- Modal Container -->
<div id="modalSendRequest" class="fixed inset-0 bg-dark bg-opacity-50 items-center justify-center hidden z-20">
    <!-- Modal Container -->
    <div class="bg-light p-4 rounded-lg shadow-lg w-full max-w-md">
        <div class="flex items-center gap-3 mb-4">
            <h2 class="text-black text-lg font-bold">Select Your Role</h2>
            <i class="ti ti-brand-telegram text-orangeCustom text-2xl"></i>
        </div>

        <div class="flex flex-wrap gap-3">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-orangeCustom shadow-shadowCustom">
                <i class="text-lg text-white ti ti-flag"></i>
                <span class="text-xs font-medium text-white">
                    PMO
                </span>
            </div>
            {{-- yang bawah ini kalau dipilih --}}
            <div
                class="flex -translate-y-1 items-center gap-2 px-3 py-1 border rounded-full bg-orangeCustom shadow-shadowCustom">
                <i class="text-lg text-white ti ti-flag"></i>
                <span class="text-xs font-medium text-white">
                    PMO
                </span>
            </div>
            {{-- yang bawah ini jika sudah tidak tersedia --}}
            <div class="flex items-center gap-2 px-3 py-1 border rounded-full bg-light shadow-shadowCustom">
                <i class="text-lg text-white ti ti-flag"></i>
                <span class="text-xs font-medium text-white">
                    PMO
                </span>
            </div>
        </div>

        <p class="mt-4 mb-2 text-black">Message (opsional)</p>
        <textarea name="description" placeholder="Type your project description here..."
            class="w-full bg-transparent rounded-lg p-3 text-black placeholder-gray-400 border-black border focus:outline-none min-h-[100px]"></textarea>

        <!-- Buttons -->
        <div class="flex justify-evenly mt-6">
            <button id="cancelSendRequestBtn"
                class="px-14 py-2 rounded-full bg-lightOrange shadow-shadowCustom font-semibold text-white hover:bg-[#E7957E]">Cancel</button>
            <button
                class="px-14 py-2 rounded-full bg-orangeCustom shadow-shadowCustom font-semibold text-white hover:bg-orange-600">Send</button>
        </div>
    </div>
</div>
