<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        // Data
        'name',
        'password',
        // Links
        'website_link',
        'logo_link',
    ];
}
