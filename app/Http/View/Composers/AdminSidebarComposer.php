<?php

namespace App\Http\View\Composers;

use App\Comment;
use App\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminSidebarComposer
{

    private $comment;
    private $subscription;

    public function __construct(Comment $comment, Subscription $subscription)
    {
        $this->comment = $comment;
        $this->subscription = $subscription;
    }

    public function compose(View $view)
    {
        $countComments = $this->comment->where('status', 1)->count();
        $view->with('countComments', $countComments);

        $countDisComments = $this->comment->where('status', 0)->count();
        $view->with('countDisComments', $countDisComments);



        $countSubscriptions = $this->subscription->where('token', null)->count();
        $view->with('countSubs', $countSubscriptions);

        $countDisSubscriptions = $this->subscription->where('token', '!=', null)->count();
        $view->with('countDisSubs', $countDisSubscriptions);

        $userAvatar = Auth::user()->getAvatar();
        $view->with('userAvatar', $userAvatar);

        $userName = Auth::user()->name;
        $view->with('userName', $userName);


    }


}
