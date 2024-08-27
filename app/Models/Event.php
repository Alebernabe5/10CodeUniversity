<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        "title",
        "description",
        "place",
        "date",
        "end_time",
        "capacity",
        "organizer",
        "image_url"
    ];
    
    protected function casts(): array
{
    return [
        'date' => 'datetime:Y-m-d',
    ];
}
}
