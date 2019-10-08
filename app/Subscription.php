<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscription extends Model
{
    public static function add($email)
    {
        $subscription = new static;
        $subscription->email = $email;
        $subscription->save();

        return $subscription;
    }

    public function generateToken()
    {
        $this->token = Str::random(100);
        $this->save();
    }

    public function verify($token)
    {
        $subs = self::where('token', $token)->firstOrFail();
        $subs->token=null;
        $subs->save();

        return $subs;
    }


    public function verifying()
    {
        $this->token = null;
        $this->save();
    }
    public function unVerifying()
    {
        $this->generateToken();
    }
    public function toggleVerify()
    {
        return($this->token == null)
        ? $this->unVerifying()
        : $this->verifying();
    }





    public function remove()
    {
        $this->delete();
    }
}
