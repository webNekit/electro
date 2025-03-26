<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Question;
use App\Models\Service;
use App\Models\Statistic;
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
        return view('main::index', [
            'features' => $features,
            'statistics' => $statistics,
            'services' => $services,
            'questions' => $questions
        ]);
    }
}
