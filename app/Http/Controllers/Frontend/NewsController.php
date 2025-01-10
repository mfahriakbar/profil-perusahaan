<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of news.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $news = News::latest()->paginate(10);
        return view('frontend.news', compact('news'));
    }

    /**
     * Display the specified news.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug): View
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('frontend.news-detail', compact('news'));
    }
}
