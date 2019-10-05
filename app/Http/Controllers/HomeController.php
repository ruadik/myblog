<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', Post::IS_PUBLIC)->paginate(4);
        return view('pages.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('post'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->post()->where('status', 1)->paginate(8);
        return view('pages.list', compact('posts'));
    }

    public function tag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->post()->where('status', 1)->paginate(8);
        return view('pages.list', compact('posts'));
    }

    public function aboutMe()
    {
        $admin = User::find(1);
//        dd($admin);
        return view('pages.aboutMe', compact('admin'));
    }

    public function contact()
    {
        $admin = User::find(1);
//        dd($admin);
        return view('pages.contact', compact('admin'));
    }

}
