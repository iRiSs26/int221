{{-- 

   @extends('layouts.app')

@section('content')
    <h1 class="title">Search Notes</h1>

    <!-- Search Form -->
    <form action="{{ route('notes.search') }}" method="GET" class="form">
        @csrf
        <div class="form-group">
            <input type="text" name="topic" placeholder="Enter topic name" value="{{ old('topic') }}" class="form-control">
        </div>
        <button type="submit" class="btn">Search</button>
    </form>

    @if($notes->isEmpty())
        <p class="no-results">No notes found for this topic.</p>
    @else
        <h2 class="section-title">Search Results</h2>
        <ul class="notes-list">
            @foreach ($notes as $note)
                <li class="note-item">
                    <strong>Title:</strong> {{ $note->title }}<br>
                    <strong>Topic:</strong> {{ $note->topic }}<br>
                    <strong>Description:</strong> {{ $note->description }}<br>
                    <a href="{{ route('notes.download', $note->id) }}" class="btn download-link">Download</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection --}}
@extends('layouts.app')

@section('content')
    <h1 class="title">Search Notes</h1>

    <!-- Search Form -->
    <form action="{{ route('notes.search') }}" method="GET" class="form">
        @csrf
        <div class="form-group">
            <input type="text" name="topic" placeholder="Enter title to search" value="{{ old('topic') }}" class="form-control">
        </div>
        <button type="submit" class="btn">Search</button>
    </form>

    @if($notes->isEmpty())
        <p class="no-results">No notes found for this title.</p>
    @else
        <h2 class="section-title">Search Results</h2>
        <ul class="notes-list">
            @foreach ($notes as $note)
                <li class="note-item">
                    <strong>Title:</strong> {{ $note->title }}<br>
                    <strong>Description:</strong> {{ $note->description }}<br>
                    <a href="{{ route('notes.download', $note->id) }}" class="btn download-link">Download</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
