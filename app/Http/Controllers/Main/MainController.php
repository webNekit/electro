<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feature;
use App\Models\Question;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $features = Feature::where('is_active', true)
            ->where('is_featured', true)
            ->orderByDesc('created_at')
            ->get();
        $statistics = Statistic::orderByDesc('created_at')->get();
        $services = Service::orderByDesc('created_at')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->get();
        $questions = Question::orderByDesc('created_at')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->get();
        $blogs = Blog::orderByDesc('created_at')
            ->where('is_active', true)
            ->where('is_popular', true)
            ->limit(6)
            ->get();
        $teams = Team::orderByDesc('created_at')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->limit(8)
            ->get();
        $posts = Blog::orderByDesc('created_at')
            ->where('is_active', true)
            ->where('is_banner', true)
            ->get();
        return view('main::index', [
            'features' => $features,
            'statistics' => $statistics,
            'services' => $services,
            'questions' => $questions,
            'blogs' => $blogs,
            'teams' => $teams,
            'posts' => $posts
        ]);
    }
}
