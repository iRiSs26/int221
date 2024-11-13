


 @extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="header">Chatroom: {{ $chatroom->topic }}</h1>

        <!-- Display Messages -->
        <div id="messages" class="messages">
            @foreach ($chatroom->messages as $message)
                <div class="message-item">
                    <p>{{ $message->content }}</p>
                </div>
            @endforeach
        </div>

        <!-- Send Message Form -->
        <form id="chatForm" action="{{ route('chatroom.sendMessage', $chatroom->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="message">Message:</label>
                <input type="text" name="message" id="message" placeholder="Type a message..." required>
            </div>
            <button type="submit" class="submit-btn">Send</button>
        </form>
    </div>

    <!-- Socket.io Script for Real-time Messaging -->
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
            newMessage.classList.add('message-item');
            messagesDiv.appendChild(newMessage);
            messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom when new messages are added
        });

        // Handle message sending via Socket.IO
        document.getElementById('chatForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const message = document.getElementById('message').value;

            // Emit the message to the server via Socket.IO
            socket.emit('chatMessage', { chatroomId, message });

            // Optionally, append the message immediately
            const messagesDiv = document.getElementById('messages');
            const newMessage = document.createElement('div');
            newMessage.textContent = message;
            newMessage.classList.add('message-item');
            messagesDiv.appendChild(newMessage);

            // Clear the input field after sending the message
            document.getElementById('message').value = '';
            messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom
        });
    </script>
@endsection
