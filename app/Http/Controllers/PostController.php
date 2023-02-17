<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        $posts = Post::all();
        $categories = Category::all();


        return view('post.index',compact('posts','categories'));

    }

    public function show(Post $post)
    {
        $categories = Category::all();


        return view('post.show',compact('post','categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create',compact('categories','tags'));


    }
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('post.edit', compact('post','categories','tags'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'content'=> 'string',
            'image'=> 'string',
            'category_id'=>'',
            'tags'=>''

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');

    }

    public function update(Post $post, Request $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'content'=> 'string',
            'image'=> 'string',
            'category_id'=>'',
            'tags'=>''

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->tags()->sync($tags);

        $post -> update($data);
        return redirect()->route('post.show',$post -> id);
    }

}
