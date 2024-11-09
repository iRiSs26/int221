{{-- <!-- resources/views/chatroom/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Chatroom: {{ $chatroom->topic }}</h1>

    <div id="messages">
        <!-- Messages will be appended here -->
    </div>

    <form id="chatForm">
        <input type="text" id="messageInput" placeholder="Type a message..." required>
        <button type="submit">Send</button>
    </form>

    <script src="https://cdn.socket.io/4.5.1/socket.io.min.js"></script>
    <script>
        const socket = io('http://localhost:3000');
        const chatroomId = "{{ $chatroom->id }}";

        // Join the chatroom when the page loads
        socket.emit('joinRoom', chatroomId);

        // Listen for incoming messages and append them to the chat
        socket.on('message', (message) => {
            const messagesDiv = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            messagesDiv.appendChild(newMessage);
        });

        // Handle message sending
        document.getElementById('chatForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const message = document.getElementById('messageInput').value;
            socket.emit('chatMessage', { chatroomId, message });
            document.getElementById('messageInput').value = ''; // Clear input
        });
    </script>
@endsection --}}

@extends('layouts.app')

@section('content')
    <h1>Chatroom: {{ $chatroom->topic }}</h1>

    <!-- Display messages -->
    <div id="messages">
        <!-- Iterate through messages to display each -->
        @foreach ($chatroom->messages as $message)
            <div>{{ $message->content }}</div>
        @endforeach
    </div>

    <!-- Form to send a new message -->
    <form id="chatForm" action="{{ route('chatroom.sendMessage', $chatroom->id) }}" method="POST">
        @csrf
        <div>
            <label for="message">Message:</label>
            <input type="text" name="message" id="message" required>
        </div>
        <button type="submit">Send Message</button>
    </form>

    <script src="https://cdn.socket.io/4.5.1/socket.io.min.js"></script>
    <script>
        // Initialize Socket.IO
        const socket = io('http://localhost:3000');
        const chatroomId = "{{ $chatroom->id }}"; // Get chatroom ID from blade

        // Join the chatroom when the page loads
        socket.emit('joinRoom', chatroomId);

        // Listen for incoming messages and append them to the chat
        socket.on('message', (message) => {
            const messagesDiv = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            messagesDiv.appendChild(newMessage);
        });

        // Handle message sending via Socket.IO
        document.getElementById('chatForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const message = document.getElementById('message').value;

            // Emit the message to the server via Socket.IO
            socket.emit('chatMessage', { chatroomId, message });

            // Optionally, you can also append the message locally immediately
            const messagesDiv = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            messagesDiv.appendChild(newMessage);

            // Clear the input field after sending the message
            document.getElementById('message').value = '';
        });
    </script>
@endsection

