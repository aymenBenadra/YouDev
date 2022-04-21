<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'companies';

    protected $fillable = [
        // Data
        'name',
        'password',
        // Links
        'website_link',
        'logo_link',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
