<!-- resources/views/group_study/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Study Groups</h1>

    <div>
        <a href="{{ route('group_study.create') }}">Create New Study Group</a>
    </div>

    <ul>
        @foreach ($groupStudies as $groupStudy)
            <li>
                <strong>Topic:</strong> {{ $groupStudy->topic }} <br>
                @if ($groupStudy->meeting_link)
                    <strong>Meeting Link:</strong> 
                    <a href="{{ $groupStudy->meeting_link }}" target="_blank">{{ $groupStudy->meeting_link }}</a><br>
                @endif
                @if ($groupStudy->start_time)
                    <strong>Start Time:</strong> {{ $groupStudy->start_time }} <br>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
