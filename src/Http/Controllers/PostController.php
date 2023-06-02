<?php

namespace Agalyomarov\Posts\Http\Controllers;

use Agalyomarov\Posts\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        Post::create(['title' => "hello"]);
        $posts = Post::all();
        return view('posts::index', compact('posts'));
    }
}
