@extends('layouts.app')

@section('content')
    <h1>Notes</h1>

    <!-- Display Upload and Search Options -->
    <div>
        <h2>Upload a New Note</h2>
        <form action="{{ route('notes.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <div>
                <label for="file">Upload File:</label>
                <input type="file" name="file" id="file" required>
            </div>

            <button type="submit">Upload Note</button>
        </form>
    </div>

    <div>
        <h2>Search Notes</h2>
        <form action="{{ route('notes.search') }}" method="GET">
            @csrf
            <div>
                <label for="query">Search:</label>
                <input type="text" name="query" id="query" required>
            </div>
            <button type="submit">Search</button>
        </form>
    </div>

    <h2>All Notes</h2>
    <ul>
        @foreach($notes as $note)
            <li>
                <strong>{{ $note->title }}</strong> - 
                <a href="{{ route('notes.download', $note->id) }}">Download</a>
            </li>
        @endforeach
    </ul>
@endsection
