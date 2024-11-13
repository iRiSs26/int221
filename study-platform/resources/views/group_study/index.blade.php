


@extends('layouts.app')

@section('content')
    <div class="container2">
        <h1 class="header">Study Groups</h1>

        <div class="create-group-btn">
            <a href="{{ route('group_study.create') }}" class="btn">Create New Study Group</a>
        </div>

        <ul class="group-list">
            @foreach ($groupStudies as $groupStudy)
                <li class="group-item">
                    <div class="group-details">
                        <strong>Topic:</strong> {{ $groupStudy->topic }} <br>
                        @if ($groupStudy->meeting_link)
                            <strong>Meeting Link:</strong>
                            <a href="{{ $groupStudy->meeting_link }}" target="_blank" class="link">{{ $groupStudy->meeting_link }}</a><br>
                        @endif
                        @if ($groupStudy->start_time)
                            <strong>Start Time:</strong> {{ $groupStudy->start_time }} <br>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
