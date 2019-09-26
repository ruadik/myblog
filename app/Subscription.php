<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public static function add($email)
    {
        $subscription = new static;
        $subscription->email = $email;
        $subscription->token = str_random(100);
        $subscription->save();
    }

    public function remove()
    {
        $this->delete();
    }
}
