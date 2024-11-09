<!-- resources/views/group_study/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Study Group</h1>

    <form action="{{ route('group_study.store') }}" method="POST">
        @csrf

        <div>
            <label for="topic">Topic</label>
            <input type="text" name="topic" id="topic" required>
        </div>

        <div>
            <label for="meeting_link">Meeting Link (Generated on Google Meet)</label>
            <input type="url" name="meeting_link" id="meeting_link" placeholder="Paste the meeting link here">
        </div>

        <div>
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time">
        </div>

        <button type="submit">Create Group</button>
    </form>
@endsection
