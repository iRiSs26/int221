<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupStudy;

class GroupStudyController extends Controller
{
    //
    public function index()
    {
        // Fetch all the group studies from the database
        $groupStudies = GroupStudy::all();
        return view('group_study.index', compact('groupStudies'));
    }

    // Show the form to create a new study group
    public function create()
    {
        return view('group_study.create');
    }

    // Store the study group details
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'meeting_link' => 'nullable|url',
            'start_time' => 'nullable|date_format:H:i',
        ]);

        // Store the new group study in the database
        $groupStudy = new GroupStudy();
        $groupStudy->topic = $request->input('topic');
        $groupStudy->meeting_link = $request->input('meeting_link');
        $groupStudy->start_time = $request->input('start_time');
        $groupStudy->save();

        // Redirect back to the group study index page
        return redirect()->route('group_study.index')->with('success', 'Study group created successfully');
    }
}
