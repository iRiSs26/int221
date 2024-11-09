<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatroom;

class ChatroomController extends Controller
{
    public function index() {
        $chatrooms = Chatroom::all();
        return view('chatroom.index', compact('chatrooms'));
    }

    public function create(Request $request) {
        $request->validate(['topic' => 'required|string']);

        Chatroom::create(['topic' => $request->input('topic')]);
        return redirect('/assignment-chatroom');
    }

    // public function show($id) {
    //     $chatroom = Chatroom::findOrFail($id);
    //     return view('chatroom.show', compact('chatroom'));
    // }
    public function show($id) {
        $chatroom = Chatroom::with('messages')->findOrFail($id); // Eager load messages
        return view('chatroom.show', compact('chatroom'));
    }
    
    public function sendMessage(Request $request, $chatroomId)
{
    $request->validate([
        'message' => 'required|string',
    ]);

    // Store the message in the database
    Message::create([
        'content' => $request->message,
        'chatroom_id' => $chatroomId,
    ]);

    // Redirect back to the chatroom page
    return redirect()->route('chatroom.show', $chatroomId);
}

    //
}
