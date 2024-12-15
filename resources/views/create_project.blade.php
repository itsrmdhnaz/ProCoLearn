<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <form class="flex-1 space-y-6" action="{{ route('project.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <!-- Project Name -->
            <div>
                <label class="block mb-2">
                    Project Name<span class="text-orangeCustom">*</span>
                </label>

                <input type="text" value="{{ old('name') }}" name="name"
                    placeholder="Type your project name here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Project Description -->
            <div>
                <label class="block mb-2">
                    Project Description<span class="text-orangeCustom">*</span>
                </label>
                <textarea name="description" placeholder="Type your project description here..."
                    class="w-full bg-transparent rounded-lg p-3 text-white placeholder-gray-400 border-white border focus:outline-none min-h-[100px]">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
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
                    <div class="flex items-center gap-2 px-3 py-1 bg-purple-600 rounded-full drop-shadow-lg">
                        <i class="text-lg text-white ti ti-brand-figma"></i>
                        <span class="text-xs font-medium text-white">
                            UI / UX
                        </span>
                    </div>

                    <input name="roles[]" type="text" value="{{ old('roles.0') }}"
                    placeholder="Fill in what resources are used in your project here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                    @error('roles')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <button class="text-2xl text-orangeCustom"><i class="text-2xl text-white ti ti-plus"></i></button>
                </div>
            </div>

            <!-- Resources -->
            <div>
                <label class="block mb-2">
                    Resources<span class="text-orangeCustom">*</span>
                </label>
                <input name="resources" type="text" value="{{ old('resources') }}"
                    placeholder="Fill in what resources are used in your project here..."
                    class="w-full p-3 text-white placeholder-gray-400 bg-transparent border border-white rounded-lg focus:outline-none">
                <p class="mt-1 text-xs text-end text-lightDark2">Use ',' to separate words, for example: flutter,
                    laravel</p>
                @error('resource')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block mb-2">Image</label>
                <div class="flex items-center justify-center p-8 border-2 border-dashed rounded-lg border-lightDark2">
                    <div class="text-center">
                        <i class="text-4xl ti ti-photo-plus text-lightDark2"></i>
                    </div>
                </div>
                <input type="file" name="image">
                @error('image')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 mt-6 text-white rounded-lg bg-orangeCustom shadow-shadowCustom">
                Next
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const preview = document.getElementById('imagePreview');
                preview.src = e.target.result;
                preview.style.display = 'block'; // Show the preview image
            };

            if (file) {
                reader.readAsDataURL(file);
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
