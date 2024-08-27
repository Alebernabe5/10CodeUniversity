<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spaces extends Model
{
    use HasFactory;

    protected $table = "spaces";

    protected $fillable = [
        "name",
        "capacity",
        "opens_at",
        "closes_at"
       
    ];
}
