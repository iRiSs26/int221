

@extends('layouts.app')

@section('content')
    <div class="container1">
        <h1 class="header">Create Study Group</h1>

        <!-- Button to Create Google Meet -->
        <div class="form-group">
            <a href="https://meet.google.com" target="_blank" class="gmeet-link-btn">Click here to create a Google Meet</a>
        </div>

        <form action="{{ route('group_study.store') }}" method="POST" class="form">
            @csrf

            <div class="form-group">
                <label for="topic">Topic</label>
                <input type="text" name="topic" id="topic" required class="input-field">
            </div>

            <div class="form-group">
                <label for="meeting_link">Meeting Link (Generated on Google Meet)</label>
                <input type="url" name="meeting_link" id="meeting_link" placeholder="Paste the meeting link here" class="input-field">
            </div>

            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="time" name="start_time" id="start_time" class="input-field">
            </div>
            
            

            

            <button type="submit" class="submit-btn">Create Group</button>
        </form>
    </div>
@endsection
