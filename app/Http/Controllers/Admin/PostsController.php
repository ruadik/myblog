<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('title','id');
        $tags = Tag::pluck('title','id');
        return view('admin.posts.create', compact('categories','tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);

        $post = Post::add($request->all());
        $post->uploadImage($request->file('image'));

        $post->setCategory($request->category_id);

        $post->setTags($request->tags);

        $post->toggleStatus($request->status);
        $post->toggleFeatured($request->is_featured);

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::pluck('title', 'id')->except($post->category_id);
        $tags = Tag::pluck('title', 'id');
        $setTags = $post->Tags->pluck('id')->all();

        return view('admin.posts.edit', compact('post','categories', 'tags', 'setTags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'image' => 'nullable|image'
        ]);

        $post = Post::find($id);
        $post->edit($request->all());
        $post->uploadImage($request->file('image'));
        $post->setCategory($request->category_id);
        $post->setTags($request->tags);
        $post->toggleFeatured($request->if_featured);
        $post->toggleStatus($request->status);

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->remove();

        return redirect()->route('posts.index');
    }
}
