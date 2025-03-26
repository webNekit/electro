<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about::index', [
            'stats' => Statistic::orderByDesc('created_at')->get(),
            'title' => 'О компании'
        ]);
    }
}
