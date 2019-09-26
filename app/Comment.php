<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Post()
    {
        return $this->hasOne(Post::class);
    }


    public function allow()
    {
       $this->status = 1;
       $this->save();
    }
    public function disallow()
    {
       $this->status = 0;
       $this->save();
    }
    public function toggleStatus()
    {
        if($this->status == 0){
            return $this->allow();
        }
        return $this->disallow();
    }

    public function remove()
    {
        $this->delete();
    }

}
