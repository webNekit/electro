<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services::index', [
            'services' => Service::orderByDesc('created_at')->where('is_active', true)->get(),
            'title' => 'Услуги'
        ]);
    }
}
