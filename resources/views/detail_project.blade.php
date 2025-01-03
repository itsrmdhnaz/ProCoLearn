<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProCoLearn Post</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark text-white">
    <div class="max-w-screen-2xl mx-auto p-4 sm:p-0 flex flex-col sm:flex-row min-h-screen overflow-hidden">

        <!-- Sidebar -->
        <x-side-bar-project></x-side-bar-project>

        <!-- Main Content -->
        <div class="sm:p-4 flex flex-col flex-1">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <div class="flex gap-4 items-center">
                    <button class="bg-orangeCustom rounded-full px-1 shadow-shadowCustom">
                        <i class="ti ti-chevron-left text-2xl text-white"></i>
                    </button>
                    <i class="hidden lg:block ti ti-folder text-2xl text-black px-1 rounded-md bg-[#ECE7C9]"></i>
                    <h1 class="hidden lg:block text-xl font-bold">APP Tukang Bangunan</h1>
                </div>
                <div class="flex items-center gap-4">
                    <button id="send-request-button"
                        class="bg-orangeCustom px-4 py-1 rounded-full flex shadow-shadowCustom items-center gap-2">
                        <i class="ti ti-location-plus text-lg text-white"></i>
                        <p>
                            Send Request
                        </p>
                    </button>
                    <button class="bg-orangeCustom rounded-full px-1 shadow-shadowCustom">
                        <i class="ti ti-dots text-2xl text-white"></i>
                    </button>
                </div>
            </div>

            @include('project.modal_send_project')

            <!-- Post Content (with Scroll) -->
            <div class="flex-1 flex flex-col">
                <p class="text-lightDark2 text-sm font-medium mb-2">posted 23h ago</p>
                <h1 class="text-2xl font-bold mb-3 lg:hidden">APP Tukang Bangunan</h1>

                <!-- Tags -->
                <div class="flex gap-4 mb-4">
                    <span
                        class="bg-orangeCustom bg-opacity-20 text-orangeCustom shadow-shadowCustom px-3 py-1 rounded-full text-sm">#flutter</span>
                    <span
                        class="bg-orangeCustom bg-opacity-20 text-orangeCustom shadow-shadowCustom px-3 py-1 rounded-full text-sm">#laravel</span>
                    <span
                        class="bg-orangeCustom bg-opacity-20 text-orangeCustom shadow-shadowCustom px-3 py-1 rounded-full text-sm">#figma</span>
                </div>

                <!-- image -->
                <div class="w-full">
                    <div class="bg-dark max-w-3xl mx-auto rounded-3xl p-8 mb-4 flex h-40 items-center justify-center">
                        <div class="text-2xl font-bold">
                            <span class="text-white">ProCo</span>
                            <span class="text-orangeCustom">Learn.</span>
                        </div>
                    </div>
                </div>

                <hr class="hidden lg:block my-6">

                <!-- Description -->
                <div>
                    <p class="hidden lg:block text-white font-semibold text-md mb-2">Description</p>
                        <p class="text-white text-sm lg:text-md mb-4">
                            ada pengajak seperti ini "apakah ada yang ingin bergabung dengan saya belajar membuat
                            aplikasi
                            android"
                            lalu sang pengajak ini akan membagikan role, "role terdiri dari 3 back end, 3 front end",
                            nanti
                            role
                            disediakan oleh website, jadi nanti sang pengajak itu akan memilih dulu di awal dia sebagai
                            apa
                        </p>
                </div>
            </div>

            <!-- Created By -->
            <div class="mt-6 max-w-2xl">
                <div class="flex justify-between sm:gap-4 items-center mb-7">
                    <p class="text-white font-semibold text-sm mb-2">Created By</p>
                    <button class="bg-orangeCustom rounded-full sm:hidden px-3 flex items-center gap-2">
                        <i class="ti ti-bookmark text-2xl"></i>
                        <p>24</p>
                    </button>
                </div>
                <div class="flex justify-between items-center bg-orangeCustom px-4 py-3 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-dark rounded-full"></div>
                        <span class="text-white">Ramadhan abdul</span>
                    </div>
                    <button
                        class="border border-white bg-white px-4 py-1 rounded-xl flex items-center gap-2 shadow-shadowCustom">
                        <i class="ti ti-plus text-xl font-semibold text-orangeCustom"></i>
                        <p class="text-orangeCustom font-medium text-sm">Follow</p>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const sendRequestButton = document.getElementById('send-request-button');
        const modalSendRequest = document.getElementById('modalSendRequest');

        const cancelBtn = document.getElementById('cancelSendRequestBtn');

        sendRequestButton.addEventListener('click', () => {
            modalSendRequest.classList.remove('hidden');
            modalSendRequest.classList.add('flex');
        });

        cancelBtn.addEventListener('click', () => {
            modalSendRequest.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modalSendRequest) {
                modalSendRequest.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
