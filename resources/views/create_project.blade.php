<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Form</title>
    <style>
        /* Hide scrollbar for all elements */
        * {
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        *::-webkit-scrollbar {
            display: none;
        }

        /* Ensure the textarea maintains functionality but hides scrollbar */
        textarea {
            overflow-y: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        textarea::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-white bg-lightDark">
    <div class="flex flex-col min-h-screen p-4 mx-auto max-w-screen-2xl">
        <!-- Header -->
        <div class="mb-6">
            <button class="px-1 rounded-full bg-orangeCustom shadow-shadowCustom">
                <i class="text-2xl text-white ti ti-chevron-left"></i>
            </button>
        </div>

        <!-- Form Content -->
        <form class="flex-1 space-y-6 default-form" action="{{ route('project.store') }}" enctype="multipart/form-data"
            method="POST">
            @csrf
            <!-- Project Name -->
            <div>
                <label class="block mb-2">
                    Project Name<span class="text-orangeCustom">*</span>
                </label>

                <input type="text" name="name" placeholder="Type your project name here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                <div class="invalid-feedback"></div>
            </div>

            <!-- Project Description -->
            <div>
                <label class="block mb-2">
                    Project Description<span class="text-orangeCustom">*</span>
                </label>
                <textarea name="description" placeholder="Type your project description here..."
                    class="w-full bg-transparent rounded-lg p-3 text-white placeholder-gray-400 border-white border focus:outline-none min-h-[100px]">{{ old('description') }}</textarea>
                <div class="invalid-feedback"></div>
            </div>

            <!-- Roles -->
            <div>
                <label class="block mb-2">
                    Roles In This Project<span class="text-orangeCustom">*</span>
                </label>
                <div class="flex flex-wrap gap-2">
                    <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-orangeCustom drop-shadow-lg">
                        <i class="text-lg text-white ti ti-flag"></i>
                        <span class="text-xs font-medium text-white">
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
                    <button id="add-role-button" type="button" class="text-2xl text-orangeCustom"><i
                            class="text-2xl text-white ti ti-plus"></i></button>

                    {{-- <input name="roles[]" type="text" value=""
                    placeholder="Fill in what resources are used in your project here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                    <button type="button" class="text-2xl text-orangeCustom"><i class="text-2xl text-white ti ti-plus"></i></button>
                    <div class="invalid-feedback"></div> --}}
                </div>
            </div>

            @include('my_project.modal_add_role')

            <!-- Resources -->
            <div>
                <label class="block mb-2">
                    Resources<span class="text-orangeCustom">*</span>
                </label>
                <input name="resources" type="text"
                    placeholder="Fill in what resources are used in your project here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                <p class="mt-1 text-xs text-end text-lightDark2">Use ',' to separate words, for example: flutter,
                    laravel</p>
                <div class="invalid-feedback"></div>
            </div>

            {{-- IMAGE --}}
            <div>
                <label class="block mb-2">Image</label>
                <!-- Container Gambar dan Ikon -->
                <div id="imageContainer"
                    class="flex items-center justify-center p-8 border-2 border-dashed rounded-lg border-lightDark2 relative">
                    <!-- Ikon Default -->
                    <div id="iconPlaceholder" class="text-center absolute">
                        <i class="text-4xl ti ti-photo-plus text-lightDark2"></i>
                    </div>
                    <!-- Gambar Preview -->
                    <img id="imagePreview" src="#" alt="Image Preview"
                        class="hidden w-full max-w-xs object-cover rounded-lg shadow-lg">
                </div>

                <!-- Input File (Hanya Satu) -->
                <input type="file" id="fileInput" class="hidden" accept="image/*"
                    onchange="previewImage(event); showFileName(event);">

                <!-- Tombol Kustom -->
                <label for="fileInput"
                    class="cursor-pointer bg-orange-500 hover:bg-orange-600 text-white px-4 py-1 rounded-lg shadow-md inline-block mt-2">
                    Choose File
                </label>

                <!-- Nama File -->
                <span id="fileName" class="ml-2 text-gray-400">No file chosen</span>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 mt-6 text-white rounded-lg bg-orangeCustom shadow-shadowCustom">
                Next
            </button>
        </form>
    </div>
    <script src="{{ url('js/content.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const addRoleButton = document.getElementById('add-role-button');
        const modalAddRole = document.getElementById('modalAddRole');

        const cancelBtn = document.getElementById('cancelAddRoleBtn');

        addRoleButton.addEventListener('click', () => {
            modalAddRole.classList.remove('hidden');
            modalAddRole.classList.add('flex');
        });

        cancelBtn.addEventListener('click', () => {
            modalAddRole.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modalAddRole) {
                modalAddRole.classList.add('hidden');
            }
        });

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            const preview = document.getElementById('imagePreview');
            const iconPlaceholder = document.getElementById('iconPlaceholder');
            const imageContainer = document.getElementById('imageContainer');

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                iconPlaceholder.classList.add('hidden');

                // Hapus border dan padding container
                imageContainer.classList.remove('p-8', 'border-2', 'border-dashed', 'border-lightDark2');
                imageContainer.classList.add('p-0');
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function showFileName(event) {
            const fileNameSpan = document.getElementById('fileName');
            const file = event.target.files[0];

            if (file) {
                fileNameSpan.textContent = file.name;
                fileNameSpan.style.color = 'white';
            } else {
                fileNameSpan.textContent = 'No file chosen'; // Default jika tidak ada file
            }
        }
    </script>
    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            })
        </script>
    @endif
    @if (session('success'))
        <script>
            const ToastSuccess = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            ToastSuccess.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        </script>
    @endif
</body>

</html>
