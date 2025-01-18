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

        // Get monthly data for charts
        $monthlyNewsData = News::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyGalleryData = Gallery::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        // Fill in missing months with zeros
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($monthlyNewsData[$i])) $monthlyNewsData[$i] = 0;
            if (!isset($monthlyGalleryData[$i])) $monthlyGalleryData[$i] = 0;
        }
        ksort($monthlyNewsData);
        ksort($monthlyGalleryData);

        return view('admin.dashboard', compact(
            'newsCount',
            'galleryCount',
            'latestNews',
            'monthlyNewsData',
            'monthlyGalleryData'
        ));
    }
}
