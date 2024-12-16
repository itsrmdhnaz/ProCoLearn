<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coba</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-lightDark">
    @include('home.home_menu_mobile')
    <div class="h-screen mx-auto text-white bg-lightDark max-w-screen-2xl">
        <div class="flex flex-col h-full">
            <!-- Header -->
            <div class="flex items-center justify-between w-full p-4 bg-lightDark">
                <div class="flex items-center gap-3">
                    <button class="text-2xl">
                        <i class="ti ti-chevron-left"></i>
                    </button>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-white rounded-full"></div>
                        <span class="font-medium">Fajar Sahab</span>
                    </div>
                </div>
                {{-- search --}}
                <div class="flex items-center flex-1 gap-3 ml-3">
                    <div class="flex justify-end flex-1" id="searchContainer">
                        <div class="flex items-center gap-2 px-0 py-0 transition-all duration-100 ease-in-out border-0 rounded-none sm:rounded-full sm:border-white sm:border-2 sm:py-2 sm:px-4 sm:gap-2 sm:flex-1"
                            id="searchWrapper">
                            <img src="{{ asset('assets/images/search-mini.svg') }}" alt="logo"
                                class="cursor-pointer w-7 sm:cursor-default" id="searchIcon">
                            <input type="text" placeholder="Search Your Study Group Here"
                                class="hidden bg-transparent w-0 sm:block sm:w-full placeholder-[#D9D9D9] border-0 p-0 focus:outline-none focus:ring-0 text-white caret-white transition-all duration-300"
                                id="searchInput">
                        </div>
                    </div>
                    {{-- menu --}}
                    <button class="text-2xl" id="overlay-menu-button">
                        <i class="w-10 h-auto text-3xl font-normal text-center text-white ti ti-menu-4"></i>
                    </button>
                </div>
            </div>

            <!-- Chat Container -->
            <div class="flex-1 overflow-y-auto scrolled-text">
                <div class="flex flex-col gap-4 p-4" id="message-list">

                </div>
            </div>

            <!-- Input Area -->
            <div class="p-4 bg-dark">
                <form id="message-form" class="flex items-center gap-2">
                    <div class="flex-1 rounded-3xl bg-lightDark">
                        <input type="text" id="message-text"
                            class="w-full px-4 py-2 text-white bg-transparent border-none outline-none focus:ring-0"
                            placeholder="Type a message...">
                    </div>
                    <button type="submit" class="flex items-center justify-center rounded-lg w-9 h-9 bg-orangeCustom">
                        <i class="text-lg ti ti-send"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/room_chat.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            fetchMessages();

            $('#message-form').on('submit', function(e) {
                e.preventDefault();
                sendMessage();
            });

            function fetchMessages() {
                $.ajax({
                    url: '{{ route('messages.get', $user) }}',
                    method: 'GET',
                    success: function(res) {
                        $('#message-list').empty();
                        if (res.data.length > 0) {
                            let previousGroupDate = '';
                            res.data.forEach(function(group) {
                                // Menambahkan label grup tanggal jika berubah
                                if (group[0].groupByDate !== previousGroupDate) {
                                    previousGroupDate = group[0].groupByDate;

                                    const groupDateLabel = `
                                <div class="flex px-5 py-1 mx-auto bg-dark rounded-2xl w-fit">
                                    <p class="text-xs text-center text-white">${group[0].groupByDate}</p>
                                </div>
                            `;
                                    $('#message-list').append(groupDateLabel);
                                }

                                // Menambahkan pesan-pesan untuk grup tanggal tersebut
                                group.forEach(function(message) {
                                    appendMessage(message);
                                });
                            });
                        }
                    }
                });
            }

            function sendMessage() {
                const message = $('#message-text').val();
                $.ajax({
                    url: '{{ route('message.send', $user) }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        message: message
                    },
                    success: function(res) {
                        console.log(res)
                        $('#message-text').val('');
                        appendMessage(res.data);
                    }
                });
            }

            // Fungsi untuk menambahkan pesan ke tampilan sesuai dengan UI baru
            function appendMessage(data) {
                const isOwnMessage = data.receiver.name === "{{ $user }}";
                const alignment = isOwnMessage ? 'items-end' : 'items-start';
                const bgColor = isOwnMessage ? 'bg-orangeCustom' : 'bg-dark';
                const rounded = isOwnMessage ? 'rounded-t-2xl rounded-bl-2xl' : 'rounded-b-2xl rounded-tr-2xl'

                const messageContainer = `
            <div class="flex flex-col ${alignment} space-y-2">
                <div class="${bgColor} ${rounded} p-3 max-w-[80%] w-fit">
                    <p class="text-sm">${data.message}</p>
                </div>
                <p class="text-[10px] ${isOwnMessage ? 'text-right' : 'text-left'} text-gray-200">${data.time}</p>
            </div>
        `;
                $('#message-list').append(messageContainer);
            }

            window.Echo.private('message.' + "{{ auth()->user()->name }}")
                .listen('GotMessage', function(res) {
                    console.log('Received:', res);
                    appendMessage(res.message);
                });
        });
    </script>
</body>

</html>
