<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $newsCount = News::count();
        $galleryCount = Gallery::count();
        $latestNews = News::latest()->take(5)->get();

        return view('admin.dashboard', compact('newsCount', 'galleryCount', 'latestNews'));
    }
}
