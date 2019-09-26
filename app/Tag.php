<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
    protected $fillable = ['title'];

    use Sluggable;

    public function Post()
    {
        return $this->belongsToMany(Post::class,
            'Posts_Tags',
            'tags_id',
            'post_id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
