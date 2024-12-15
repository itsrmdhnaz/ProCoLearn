<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planning Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .scrollable-content {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70vh;
            transition: height 0.3s ease;
            z-index: 10;
            max-width: 1536px;
            /* 2xl breakpoint */
            margin: 0 auto;
        }

        .scrollable-content.expanded {
            height: 95vh;
        }

        .content-wrapper {
            height: 100%;
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-lightDark h-screen">
    <div class="h-screen max-w-screen-2xl mx-auto overflow-hidden bg-lightDark flex flex-col space-y-6">
        <!-- Header Container -->
        <div class="flex justify-between items-center mx-5 mt-4">
            <button class="bg-orangeCustom rounded-full px-1 shadow-shadowCustom">
                <i class="ti ti-chevron-left text-2xl text-white"></i>
            </button>
            <div class="relative">
                <button class="bg-orangeCustom rounded-full px-1 shadow-shadowCustom" id="menuButton">
                    <i class="ti ti-dots text-2xl text-white"></i>
                </button>
                <!-- Dropdown Menu -->
                <div class="hidden absolute right-0 mt-2 w-32 bg-dark rounded-lg shadow-lg py-2" id="dropdownMenu">
                    <button class="w-full px-4 py-2 text-white hover:bg-lightDark2 text-left flex items-center gap-2">
                        <i class="ti ti-edit"></i>
                        Edit
                    </button>
                    <button class="w-full px-4 py-2 text-white hover:bg-lightDark2 text-left flex items-center gap-2">
                        <i class="ti ti-trash"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>

        <div class="ml-5 flex gap-4 items-center">
            <div class="bg-purple-600 justify-center drop-shadow-lg w-14 h-14 gap-2 flex items-center rounded-full">
                <i class="ti ti-brand-figma text-2xl text-white"></i>
            </div>
            <h1 class="text-white text-2xl font-bold">Planning</h1>
        </div>

        <div class="w-full flex gap-4 ml-5">
            <div class="flex gap-1 items-center">
                <div class="rounded-full w-3 h-3 bg-white"></div>
                <p class="text-white font-semibold text-xs">In Progress</p>
            </div>
            <div class="flex gap-1 items-center">
                <div class="rounded-full w-3 h-3 bg-orangeCustom"></div>
                <p class="text-white font-semibold text-xs">In Progress</p>
            </div>
            <div class="flex gap-1 items-center">
                <div class="rounded-full w-3 h-3 bg-white"></div>
                <p class="text-white font-semibold text-xs">In Progress</p>
            </div>
        </div>

        <!-- Scrollable Content -->
        <div class="scrollable-content" id="scrollableContent">
            <div class="content-wrapper scrolled-text bg-dark rounded-t-3xl">
                <div class="flex-1 py-5">
                    <!-- Assigned Section -->
                    <div class="mb-6 px-5">
                        <p class="text-white font-semibold text-sm mb-2">Assigned for</p>
                        <div class="flex items-center justify-between">
                            <p class="text-white font-bold text-sm">Ramadhan, Dhafa, Fajar</p>
                            <div class="flex -space-x-2">
                                <div
                                    class="w-6 h-6 rounded-full bg-orangeCustom flex items-center justify-center text-xs text-white">
                                    R</div>
                                <div
                                    class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center text-xs text-white">
                                    D</div>
                                <div
                                    class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-xs text-white">
                                    F</div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-lightDark">

                    <!-- Task List -->
                    <div class="space-y-4 px-5 mt-6">
                        <p class="text-white font-semibold text-sm mb-2">Task</p>

                        <!-- Tasks -->
                        <div class="flex items-center gap-3">
                            <input type="checkbox" checked disabled
                                class="w-5 h-5 rounded-md border-2 hover:bg-transparent hover:checked:bg-orangeCustom border-lightDark2 flex-shrink-0 mt-1 accent-orangeCustom checked:bg-orangeCustom">
                            <div class="flex-1">
                                <p class="text-white">Follow up ke bu sinta</p>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between w-full items-center">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-5 h-5 rounded-md border-2 border-lightDark2 flex-shrink-0 mt-1 flex items-center justify-center">
                                        <i class="ti ti-clock text-lightDark2 text-xs"></i>
                                    </div>
                                    <p class="text-white">Follow up ke bu sinta</p>
                                </div>
                                <i class="ti ti-chevron-up text-lightDark2 text-xl"></i>
                            </div>
                            <div class="ml-8 flex-1">
                                <div class="bg-light rounded-lg p-3 mt-2">
                                    <p class="text-dark font-semibold text-sm mb-3">waiting for acc</p>
                                    <div
                                        class="flex items-center border-2 border-lightDark p-1 rounded-2xl w-fit gap-2 mb-3">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-xs text-white">
                                            F</div>
                                        <p class="text-dark text-sm font-medium">Fajar Sahab</p>
                                    </div>
                                    <p class="text-dark font-normal text-xs mb-3">sudah saya kerjakan dengan 99% benar
                                    </p>
                                    <div class="flex justify-evenly">
                                        <button
                                            class="w-32 shadow-shadowCustom py-1 bg-lightOrange font-bold text-base hover:bg-[#F8C0B1] text-white rounded-lg transition-colors">
                                            Reject
                                        </button>
                                        <button
                                            class="w-32 shadow-shadowCustom py-1 bg-orangeCustom font-bold text-base hover:bg-[#e66e4c] text-white rounded-lg transition-colors">
                                            Approve
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-5 h-5 rounded-md border-2 border-lightDark2 flex-shrink-0 mt-1"></div>
                            <p class="text-white">Follow up ke bu sinta</p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mt-6 px-5">
                        <p class="text-white font-semibold text-sm mb-2">Task Deskripsi</p>
                        <p class="text-white">Kalian itu nanti begini begini begini yaaa, jangan lupa begini begininya
                            juga di submit dengan begini</p>
                    </div>

                    <!-- References -->
                    <div class="mt-6 px-5">
                        <div class="flex justify-between items-center mb-2">
                            <p class="text-lightDark2">learning reference</p>
                            <button class="text-white">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                        <div class="space-y-2">
                            <div class="bg-orangeCustom rounded-lg p-3 flex items-center gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-xs text-dark">
                                    1</div>
                                <div class="space-y-1">
                                    <p class="font-bold text-xs text-white">Belajar Flutter</p>
                                    <hr>
                                    <p class="font-bold text-sm text-purpleCustom">https://pub.dev/</p>
                                </div>
                            </div>
                            <div class="bg-orangeCustom rounded-lg p-3 flex items-center gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-white flex items-center justify-center text-xs text-dark">
                                    2</div>
                                <div class="space-y-1">
                                    <p class="font-bold text-xs text-white">Belajar Laravel</p>
                                    <hr>
                                    <div class="flex gap-2 items-center">
                                        <i class="ti ti-file-type-pdf text-purpleCustom text-lg"></i>
                                        <p class="font-bold text-sm text-purpleCustom">belajar_laravel_otodidak.pdf</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const scrollableContent = document.getElementById('scrollableContent');
        const contentWrapper = scrollableContent.querySelector('.content-wrapper');

        let isTransitioning = false;
        let lastScrollPosition = 0;

        const handleScroll = (e) => {
            if (isTransitioning) return;

            // Get current scroll position
            const currentScroll = contentWrapper.scrollTop;
            const isScrollingDown = currentScroll < lastScrollPosition;
            const isExpanded = scrollableContent.classList.contains('expanded');

            // Handle scroll direction
            if (!isExpanded && currentScroll > 20) {
                isTransitioning = true;
                scrollableContent.classList.add('expanded');
                setTimeout(() => {
                    isTransitioning = false;
                }, 300);
            } else if (isExpanded && isScrollingDown && currentScroll < 20) {
                isTransitioning = true;
                scrollableContent.classList.remove('expanded');
                setTimeout(() => {
                    isTransitioning = false;
                }, 300);
            }

            lastScrollPosition = currentScroll;
        };

        // Gunakan wheel event untuk mendeteksi arah scroll dengan lebih baik
        contentWrapper.addEventListener('wheel', (e) => {
            if (scrollableContent.classList.contains('expanded') &&
                contentWrapper.scrollTop <= 0 &&
                e.deltaY < 0) {
                // Jika sedang expanded, di posisi paling atas, dan scroll ke bawah
                scrollableContent.classList.remove('expanded');
            }
        });

        // Tetap gunakan scroll event untuk expand
        contentWrapper.addEventListener('scroll', handleScroll);

        // Dropdown menu code
        const menuButton = document.getElementById('menuButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        menuButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
