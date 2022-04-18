<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $with = ['company'];

    protected $fillable = [
        // Foreign keys
        'company_id',
        // Data
        'title',
        'description',
        // Links
        'application_link',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
