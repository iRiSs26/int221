@extends('layouts.app')

@section('content')
    <h1>Search Notes</h1>

    <!-- Search Form -->
    <form action="{{ route('notes.search') }}" method="GET">
        @csrf
        <input type="text" name="topic" placeholder="Enter topic name" value="{{ old('topic') }}">
        <button type="submit">Search</button>
    </form>

    @if($notes->isEmpty())
        <p>No notes found for this topic.</p>
    @else
        <h2>Search Results</h2>
        <ul>
            @foreach ($notes as $note)
                <li>
                    <strong>Title:</strong> {{ $note->title }}<br>
                    <strong>Topic:</strong> {{ $note->topic }}<br>
                    <strong>Description:</strong> {{ $note->description }}<br>
                    <!-- Add Download Link -->
                    <a href="{{ route('notes.download', $note->id) }}" class="btn btn-primary">Download</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

