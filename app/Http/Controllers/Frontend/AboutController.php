<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // You can pass any data you need to the view here
        return view('frontend.about');
    }
}
