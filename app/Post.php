<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'content'
    ];

    //relasi one to many ke category
    public function category()
    {
        return $this->belongsTo('App\Category', 'id');
    }
}
