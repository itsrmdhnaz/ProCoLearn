<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Edit</title>
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

<body class="bg-lightDark text-white">
    <div class="max-w-screen-2xl mx-auto p-4 flex flex-col min-h-screen">
        <!-- Header -->
        <div class="w-full ml-1 pr-5 mb-4">
            <!-- Content -->
            <div class=" py-1 flex items-center justify-between">
                {{-- back button --}}
                <button class="text-white p-1">
                    <i id="overlay-menu-button"
                        class=" ti ti-chevron-left font-normal text-3xl text-center text-white flex-shrink-0"></i>
                </button>
                {{-- title --}}
                <div class="flex gap-2 items-center">
                    <h1 class="text-white text-2xl font-bold">APP Tukang Bangunan</h1>
                    <i class="ti ti-settings-code text-2xl text-white"></i>
                </div>
                <div></div>
            </div>

            <div class="w-full">
                <nav class="flex justify-evenly">
                    <a href="#basic" class="px-6 py-3 text-white border-b-2 border-white font-medium">Basic Setting</a>
                    <a href="#contributor" class="px-6 py-3 text-gray-300 hover:text-white">Contributor</a>
                </nav>
            </div>
        </div>

        @yield('content')

        <!-- Submit Button -->
        <div class="w-full flex justify-end">
            <button type="submit" class="px-14 bg-orangeCustom text-white py-1 rounded-lg mt-2 shadow-shadowCustom">
                Next
            </button>
        </div>
        </form>
    </div>
</body>

</html>
