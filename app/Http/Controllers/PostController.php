<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $header = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $header = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $header = ' By ' . $author->name;
        }
        return view('posts', [
            "title" => "Posts",
            "header" => "All Posts " . $header,
            "active" => 'Posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'Posts',
            "post" => $post
        ]);
    }
}
