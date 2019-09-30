<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content', 'date', 'description'];
    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Tags()
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

    public function removeImage()
    {
        Storage::delete('uploads/'. $this->image);
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }

    public function uploadImage($image){
        if($image == null){return;}

        $this->removeImage();
        $filename = Str::random(10) .  '.' . $image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->image == null){
            return '/img/no-image.png';
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

    public function setDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
    }

    public function getDateAttribute($value)
        {
            $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');
            return $date;
        }

    public function getDate()
    {
        return Carbon::createFromFormat('d/m/y', $this->date)->format('F d, Y');
    }

    public function getCategoryTitle()
    {
        return($this->Category != null)
        ? $this->Category->title
        : 'Нет категории';
    }

    public function getTagsTitle()
    {
        return (!$this->Tags->isEmpty())
        ? $tags = implode(',', $this->Tags->pluck('title')->all())
        : 'Нет тегов';
    }

    public function hasPrevious()
    {
        return $PreviousId = self::where('id', '<', $this->id)->max('id');
    }
    public function getPrevious()
    {
        return self::find($this->hasPrevious());
    }

    public function hasNext()
    {
        return $nextId = self::where('id', '>', $this->id)->min('id');
    }
    public function getNext()
    {
        return self::find($this->hasNext());
    }

    public function related()
    {
        return static::all()->except($this->id);
    }

}
