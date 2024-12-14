@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center w-full min-h-screen mx-auto">
        <div class="text-center">
            {{-- <h1 class="text-2xl font-bold">Welcome, {{ $user->name }}</h1>
            <p class="text-gray-600">Email: {{ $user->email }}</p> --}}
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold">Your Messages</h2>
            <ul id="message-list" class="mt-4 space-y-2 text-center">
                <!-- Messages will be loaded here via AJAX -->
            </ul>
        </div>

        <div class="w-full max-w-md mt-8">
            <h3 class="text-lg font-semibold text-center">Send a Message</h3>
            <form id="message-form" class="flex flex-col items-center mt-4">
                @csrf
                <textarea name="text" id="message-text" rows="4" class="w-full p-3 border border-gray-300 rounded-lg"
                    placeholder="Type your message..."></textarea>
                <button type="submit"
                    class="px-6 py-2 mt-4 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    Send
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
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
                    url: '{{ route('messages.get', $chatId) }}',
                    method: 'GET',
                    success: function(res) {
                        $('#message-list').empty();

                        if (res.data.length > 0) {
                            res.data.forEach(function(message) {
                                appendMessage(message);
                            });
                        }
                    }
                });
            }

            function sendMessage() {
                const text = $('#message-text').val();
                $.ajax({
                    url: '{{ route('message.send', $chatId) }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        text: text
                    },
                    success: function(res) {
                        $('#message-text').val('');
                    }
                });
            }

            // Fungsi untuk menambahkan pesan ke tampilan
            function appendMessage(data) {
                console.log(data)
                console.log(data.user_id)
                const isOwnMessage = data.user_id === "{{ auth()->id() }}";
                const alignment = isOwnMessage ? 'justify-end' : 'justify-start';
                const bgColor = isOwnMessage ? 'bg-blue-500 text-white' : 'bg-gray-200 text-black';
                const textColor = isOwnMessage ? 'text-white' : 'text-gray-500';

                const li = `
            <li class="flex ${alignment}">
                <div class="max-w-xs p-3 rounded-lg ${bgColor}">
                    <p>${data.text}</p>
                    <small class="text-xs ${textColor}">
                        ${data.user.name} • ${data.time}
                    </small>
                </div>
            </li>`;
                $('#message-list').append(li);
            }

            window.Echo.private('chat.' + "{{ $chatId }}")
                .listen('GotMessage', function(res) {
                    if(res.message.sender.user_id !== "{{ auth()->user()->name }}")
                    appendMessage(res.message);
                });

        });
    </script>
@endpush
