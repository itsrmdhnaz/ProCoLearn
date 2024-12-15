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
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
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

<body class="bg-lightDark text-white">
    <div class="max-w-screen-2xl mx-auto p-4 flex flex-col min-h-screen">
        <!-- Header -->
        <div class="mb-6">
            <button class="bg-orangeCustom rounded-full px-1 shadow-shadowCustom">
                <i class="ti ti-chevron-left text-2xl text-white"></i>
            </button>
        </div>

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
                    <div class="bg-purple-600 drop-shadow-lg px-3 py-1 gap-2 flex items-center rounded-full">
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
                <label class="block mb-2">Image</label>
                <div class="border-2 border-dashed border-lightDark2 rounded-lg p-8 flex items-center justify-center">
                    <div class="text-center">
                        <i class="ti ti-photo-plus text-4xl text-lightDark2"></i>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-orangeCustom text-white py-2 rounded-lg mt-6 shadow-shadowCustom">
                Next
            </button>
        </form>
    </div>
</body>

</html>
