{{-- <!-- resources/views/chatroom/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Assignment Chatrooms</h1>

    <ul>
        @foreach($chatrooms as $chatroom)
            <li>
                <strong>{{ $chatroom->topic }}</strong>
                <a href="{{ route('chatroom.show', $chatroom->id) }}">Join Chatroom</a>
            </li>
        @endforeach
    </ul>

    <h2>Create a New Chatroom</h2>
    <form action="{{ url('/assignment-chatroom/create') }}" method="POST">
        @csrf
        <div>
            <label for="topic">Topic:</label>
            <input type="text" name="topic" id="topic" required>
        </div>
        <button type="submit">Create Chatroom</button>
    </form>
@endsection --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="header">Assignment Chatrooms</h1>

        <!-- Display Chatrooms List -->
        <div class="chatroom-list">
            <h2 class="sub-header">Available Chatrooms</h2>
            <ul>
                @foreach($chatrooms as $chatroom)
                    <li class="chatroom-item">
                        <span class="chatroom-topic">{{ $chatroom->topic }}</span>
                        <a href="{{ route('chatroom.show', $chatroom->id) }}" class="join-chatroom">Join Chatroom</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Create Chatroom Section -->
        <div class="create-chatroom">
            <h2 class="sub-header">Create a New Chatroom</h2>
            <form action="{{ url('/assignment-chatroom/create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="topic">Topic:</label>
                    <input type="text" name="topic" id="topic" required>
                </div>
                <button type="submit" class="submit-btn">Create Chatroom</button>
            </form>
        </div>
    </div>
@endsection
