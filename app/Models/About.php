<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $table = "abouts";
    protected $fillable = [
        'name',
        'phone',
        'address',
        'topic',
        'content',
    ];
}
