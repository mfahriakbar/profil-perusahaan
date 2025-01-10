<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * Display a listing of gallery items.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $galleries = Gallery::where('is_active', true)
            ->latest()
            ->paginate(12);

        return view('frontend.gallery', compact('galleries'));
    }
}
