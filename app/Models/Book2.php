<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book2 extends Model
{
    use HasFactory;

    // Important: allow mass assignment
    protected $fillable = ['title', 'author', 'year'];
}
