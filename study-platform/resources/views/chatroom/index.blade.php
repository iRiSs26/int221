<!-- resources/views/chatroom/index.blade.php -->
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
@endsection
