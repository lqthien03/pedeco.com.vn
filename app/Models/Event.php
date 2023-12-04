<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = "contacts";
    protected $fillable = [
        'about_us',
        'open_letter',
        'resource_structure',
        'overview',
    ];
}
