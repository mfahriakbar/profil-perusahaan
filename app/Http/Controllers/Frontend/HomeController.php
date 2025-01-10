<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        // Tambahkan debugging
        try {
            // Get latest news for homepage
            $news = News::latest()->take(3)->get();

            // Get company profile
            $profile = Profile::first();

            return view('frontend.home', compact('news', 'profile'));
        } catch (\Exception $e) {
            // Tampilkan error
            dd($e->getMessage());
        }
    }
}