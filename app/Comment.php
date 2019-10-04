<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Post()
    {
        return $this->belongsTo(Post::class);
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

//    public function getCommentsStatus()
//    {
//        $status = self::where('status', 1);
//        if($status == 1){
//            return 1;
//        }
////        dd($status->pluck('status'));
//
//    }

}
