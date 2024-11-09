<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    //
    use HasFactory;

    protected $fillable = ['content', 'chatroom_id'];

    // Define the inverse relationship with Chatroom
    public function chatroom()
    {
        return $this->belongsTo(Chatroom::class);
    }
}
