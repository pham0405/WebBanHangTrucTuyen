<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class BlogController extends Controller
{
    public function index()
    {
        $posts = cache()->remember('blog', 60, function () {
            return Post::all();
        });
        return view('layout.client.blog', ['blog' => $posts]);
    }
    public function blog()
    {
        $blog = BlogPost::all(); 
        return view('layout.client.blog', compact('blog'));
    }
    public function show($id)
{
    $post = BlogPost::findOrFail($id);
    return view('layout.client.blogshow', compact('post'));
}

}
