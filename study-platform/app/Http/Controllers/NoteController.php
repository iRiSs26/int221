<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Storage;
class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all(); // Get all notes
        return view('notes.index', compact('notes'));
    }

    // Search notes by keyword
    public function search(Request $request)
    {
        // $request->validate([
        //     'query' => 'required|string'
        // ]);

        // $query = $request->input('query');
        // $notes = Note::where('title', 'like', '%' . $query . '%')
        //               ->orWhere('description', 'like', '%' . $query . '%')
        //               ->get();

        // return view('notes.search', compact('notes'));
        $request->validate([
            'topic' => 'nullable|string|max:255',
        ]);

        // Search for notes containing the topic
        $topic = $request->input('topic');

        // If topic is provided, search for notes that contain the topic in the title or description
        $notes = Note::when($topic, function ($query, $topic) {
            return $query->where('title', 'like', '%' . $topic . '%');
        })->get();

        // Return the results to the view
        return view('notes.search', compact('notes'));
    }

    // Upload a new note
    public function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'file' => 'required|mimes:pdf,docx,txt|max:10240', // Adjust based on allowed file types
        ]);

        // Store the file
        $filePath = $request->file('file')->store('notes','public');

        // Create the note entry in the database
        $note = new Note();
        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->file_path = $filePath;
        $note->save();

        return redirect()->route('notes.index')->with('success', 'Note uploaded successfully');
    }

    // Download a note
    public function download($id)
    
    {
        $note = Note::findOrFail($id);

        
        if (Storage::disk('public')->exists($note->file_path)) {
            return Storage::disk('public')->download($note->file_path);
        }

        return redirect()->route('notes.index')->with('error', 'File not found.');

    }

    
    
}
