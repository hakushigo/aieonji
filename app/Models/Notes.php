<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = [
        'id', // fill the id!
        'subject', // from form
        'content', // from form either
        'authorkey', // from form either
        'password',  // from form either
        'NoteStatus'
    ];
}
