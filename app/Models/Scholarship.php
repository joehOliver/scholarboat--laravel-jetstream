<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'offers',
        'reqs',
        'qualifications',
        'open_date',
        'close_date',
        'link',
        'contact',
        'slug'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function addTag($tag) 
    {
        if (is_string($tag)) {
            $tag = Tag::whereName($tag)->firstOrFail();
        }
        
        $this->tag()->sync($tag, false);
    }
}
