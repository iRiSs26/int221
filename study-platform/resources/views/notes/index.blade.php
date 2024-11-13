{{-- @extends('layouts.app')

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
{{-- @endsection --}}
{{-- 
@extends('layouts.app')

@section('content')
<section class="container">
    <h1 class="main-title">Notes</h1>

    <!-- Upload a New Note -->
    <div class="form-section">
        <h2 class="section-title">Upload a New Note</h2>
        <form action="{{ route('notes.upload') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required class="form-input">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-input"></textarea>
            </div>

            <div class="form-group">
                <label for="file">Upload File:</label>
                <input type="file" name="file" id="file" required class="form-input">
            </div>

            <button type="submit" class="btn-submit">Upload Note</button>
        </form>
    </div>

    <!-- Search Notes -->
    <div class="form-section">
        <h2 class="section-title">Search Notes</h2>
        <form action="{{ route('notes.search') }}" method="GET" class="form">
            @csrf
            <div class="form-group">
                <label for="query">Search:</label>
                <input type="text" name="query" id="query" required class="form-input">
            </div>
            <button type="submit" class="btn-submit">Search</button>
        </form>
    </div>

    <!-- All Notes -->
    <h2 class="section-title">All Notes</h2>
    <ul class="note-list">
        @foreach($notes as $note)
        <li class="note-item">
            <span>{{ $note->title }}</span>
            <a href="{{ route('notes.download', $note->id) }}" class="note-link">Download</a>
        </li>
        @endforeach
    </ul>
</section>
@endsection  --}}


@extends('layouts.app')

@section('content')
    <h1 class="title">Notes</h1>

    <!-- Upload Section -->
    <div class="section upload-section">
        <h2 class="section-title">Upload a New Note</h2>
        <form action="{{ route('notes.upload') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="file">Upload File:</label>
                <input type="file" name="file" id="file" required class="form-control">
            </div>

            <button type="submit" class="btn">Upload Note</button>
        </form>
    </div>

    <!-- Search Section -->
      {{-- <div class="section search-section">
        <h2 class="section-title">Search Notes</h2>
        <form action="{{ route('notes.search') }}" method="GET" class="form">
            @csrf
            <div class="form-group">
                <label for="topic">Search:</label>
                <input type="text" name="query" id="query" required class="form-control">
            </div> 
            <button type="submit" class="btn">Search</button>
        </form>
    </div>  --}}

    <!-- Button to Redirect to Search Page -->
    <div class="section search-section">
        <h2 class="section-title">Search Notes</h2>
        <a href="{{ route('notes.search') }}" class="btn">Go to Search</a> <!-- Button to navigate to the search page -->
    </div>

    <!-- Notes List -->
    <h2 class="section-title">All Notes</h2>
    <ul class="notes-list">
        @foreach($notes as $note)
            <li class="note-item">
                <strong>{{ $note->title }}</strong> - 
                <a href="{{ route('notes.download', $note->id) }}" class="link">Download</a>
            </li>
        @endforeach
    </ul>
@endsection
