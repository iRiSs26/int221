<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupStudy extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'topic', 'meeting_link', 'start_time'
    ];
}
