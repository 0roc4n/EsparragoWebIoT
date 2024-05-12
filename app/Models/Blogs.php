<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'author',
        'content',
        'catergory',
        'tags',
        'status',
        'react_count',
        'comments',
        'img_path',
    
    ];
}
