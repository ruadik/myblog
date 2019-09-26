<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    const IS_BANNED = 1;
    const IS_ACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Post()
    {
        return $this->hasMany(Post::class);
    }
    public function Comment()
    {
        return $this->hasMany(Comment::class);
    }


    public static function add($fields){
        $user = new  static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function generatePassword($password)
    {
        if($password == null) {return;}
            $this->password = bcrypt(Str::random(10, $password));
            $this->save();
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }

    public function uploadAvatar($image)
    {
        if($image == null){return;}

        $this->removeAvatar();
        $fileName = Str::random(10). '.' .$image->extension();
        $image->storeAs('uploads', $fileName);
        $this->avatar = $fileName;
        $this->save();
    }

    public function removeAvatar()
    {
        Storage::delete('uploads/'.$this->avatar);
    }

    public function getAvatar()
    {
        if($this->avatar == null){
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->avatar;
    }

    public function makeAdmin()
    {
        $this->is_admin = 1;
        $this->save();
    }
    public function makeNormal()
    {
        $this->is_admin = 0;
        $this->save();
    }
    public function toggleAdmin($value)
    {
        if($value == null){
            return $this->makeNormal();
        }
        return $this->makeAdmin();
    }

    public function ban()
    {
        $this->status = User::IS_BANNED;
        $this->save();
    }
    public function unBan()
    {
        $this->status = User::IS_ACTIVE;
        $this->save();
    }
    public function toggleBan($value)
    {
        if($value == null){
            return $this->Ban();
        }
        return $this->unBan();
    }



}
