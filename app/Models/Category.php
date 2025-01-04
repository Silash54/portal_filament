<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'nepali_title',
        'english_title',
        'position',
        'slug'
    ];
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
