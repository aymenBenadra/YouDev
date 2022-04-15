<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        // Foreign keys
        'user_id',
        // Data
        'title',
        'description',
        // Links
        'image_link',
        'github_link',
        'design_link',
        // Tags
        'tags'
    ];
}
