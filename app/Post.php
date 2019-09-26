<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content'];
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    public function Category()
    {
        return $this->hasOne(Category::class);
    }
    public function User()
    {
        return $this->hasOne(User::class);
    }
    public function Tag()
    {
        return $this->belongsToMany(Tag::class,
            'Posts_Tags',
            'post_id',
            'tags_id');
    }


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public static function add($filds)
    {
        $post = new static;
        $post->fill($filds);
        $post->user_id = 1;

        $post->save();

        return $post;
    }

    public function edit($filds){
        $this->fill($filds);
        $this->save();
    }

    public function remove()
    {
        Storage::delete('uploads/'. $this->image);
        $this->delete();
    }

    public function uploadImage($image){

        if($image == null){return;}

        Storage::delete('uploads/'. $this->image);
        $filename = str_random(10) .  '.' . $image->extension();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->image == null){
            return 'img/no-image.png';
        }
        return '/uploads/'.$this->image;
    }

    public function setCategory($id){
        if($id == null){return;}

        $this->category_id = $id;
        $this->save();
    }

    public function setTags($ids){
        if($ids == null){return;}
        $this->tags()->sync($ids);
    }

    public function setDraft(){
        $this->status = Post::IS_DRAFT;
        $this->save();
    }
    public function setPublic(){
        $this->status = Post::IS_PUBLIC;
        $this->save();
    }
    public function toggleStatus($value){
        if($value == null){
            return $this->setDraft();
        }
        return $this->setPublic();
    }

    public function setFeatured(){
        $this->is_featured = 1;
        $this->save();
    }
    public function setStandart(){
        $this->is_featured = 0;
        $this->save();
    }
    public function toggleFeatured($value){
        if($value == null){
            return $this->setStandart();
        }
        return $this->setFeatured();
    }

}
