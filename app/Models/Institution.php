<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile',
        'contact',
        'logo_path',
        'link',
        'slug',
        'type'
    ];

    public function path() 
    {
        return route('institutions.show', $this);
    }

    public function scholarships() {
        return $this->hasMany(Scholarship::class);
    }
}
