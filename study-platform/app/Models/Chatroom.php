<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chatroom extends Model
{
    //
    use HasFactory;

    protected $fillable = ['topic'];

    // Define the relationship with Message
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
