<?php

namespace App\Http\View\Composers;

use App\Comment;
use Illuminate\View\View;

class AdminSidebarComposer
{

    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function compose(View $view)
    {
        $countComments = $this->comment->where('status', 0)->count();
        $view->with('countComments', $countComments);
    }


}
