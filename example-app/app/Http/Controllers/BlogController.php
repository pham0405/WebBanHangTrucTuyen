<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = BlogPost::all(); // Fetch all blog posts
        return view('layout.client.blog', compact('blog'));
    }
    public function show($id)
{
    $post = BlogPost::findOrFail($id);
    return view('layout.client.blogshow', compact('post'));
}

}
