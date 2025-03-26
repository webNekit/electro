<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->where('is_active', true)->whereHas('category', function ($query) {
            $query->where('is_active', true);
        })->orderBy('created_at', 'desc')->get();
        return view('blog::index', [
            'title' => 'Новости и статьи',
            'blogs' => $blogs
        ]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog::show', [
            'title' => $blog->name,
            'blog' => $blog
        ]);
    }
}
