<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index', [
            'title' => 'Новости и статьи'
        ]);
    }

    public function show($id)
    {
        return view('blog::show', [
            'title' => 'Детальная страница'
        ]);
    }
}
