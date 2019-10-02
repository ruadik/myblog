<?php

namespace App\Http\View\Composers;

use App\Category;
use App\Post;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class SidebarComposer
{
    private $post;
    private $category;

    public function __construct(Post $post, Category $category)
    {
        $this->post = $post;
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $view->with('popularPosts', $this->post->orderBy('views', 'desc')->limit(3)->get());
        $view->with('featuredPosts', $this->post->orderBy('is_featured', 'desc')->limit(7)->get());
        $view->with('recentPosts', $this->post->orderBy('date', 'desc')->limit(3)->get());
        $view->with('categories', $this->category->all());
    }

}