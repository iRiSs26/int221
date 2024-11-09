{{-- @extends('layouts.app')

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
 {{-- --}}

 {{-- @extends('layouts.app')

 @section('content')
 <section class="container">
     <h1 class="main-title">Search Notes</h1>
 
     <!-- Search Form -->
     <div class="form-section">
         <form action="{{ route('notes.search') }}" method="GET" class="form">
             @csrf
             <label for="topic">Enter Topic Name:</label>
             <input type="text" name="topic" placeholder="Enter topic name" value="{{ old('topic') }}" class="form-input">
             <button type="submit" class="btn-submit">Search</button>
         </form>
     </div>
 
     @if($notes->isEmpty())
         <p class="no-results">No notes found for this topic.</p>
     @else
         <h2 class="section-title">Search Results</h2>
         <ul class="note-list">
             @foreach ($notes as $note)
                 <li class="note-item">
                     <p><strong>Title:</strong> {{ $note->title }}</p>
                     <p><strong>Topic:</strong> {{ $note->topic }}</p>
                     <p><strong>Description:</strong> {{ $note->description }}</p>
                     <a href="{{ route('notes.download', $note->id) }}" class="note-link">Download</a>
                 </li>
             @endforeach
         </ul>
     @endif
 </section>
 @endsection
   --}}

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
@endsection
