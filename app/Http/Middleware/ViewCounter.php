<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class ViewCounter
{
    public function handle(Request $request, Closure $next): Response
    {
        // Waktu Sekarang
        $now = Carbon::now();

        // Dapatkan dan tingkatkan total penayangan
        $totalViews = Cache::get('page_views', 0);
        Cache::put('page_views', $totalViews + 1);

        // Handle today's views
        $todayKey = 'views_' . $now->format('Y-m-d');
        $todayViews = Cache::get($todayKey, 0);
        Cache::put($todayKey, $todayViews + 1, Carbon::tomorrow());

        // Handle month's views
        $monthKey = 'views_' . $now->format('Y-m');
        $monthViews = Cache::get($monthKey, 0);
        Cache::put($monthKey, $monthViews + 1, $now->copy()->endOfMonth());

        view()->share([
            'totalViews' => $totalViews + 1,
            'todayViews' => $todayViews + 1,
            'monthViews' => $monthViews + 1
        ]);

        return $next($request);
    }

    /**
     * Setel Ulang Counter Harian dan Bulanan
     */
    private function resetCountersIfNeeded(): void
    {
        $now = Carbon::now();

        // Periksa apakah kita perlu mengatur ulang penghitung harian
        $lastDailyReset = Cache::get('last_daily_reset');
        if (!$lastDailyReset || Carbon::parse($lastDailyReset)->isYesterday()) {
            Cache::put('today_views', 0);
            Cache::put('last_daily_reset', $now);
        }

        // Periksa apakah kita perlu mengatur ulang penghitung bulanan
        $lastMonthlyReset = Cache::get('last_monthly_reset');
        if (!$lastMonthlyReset || Carbon::parse($lastMonthlyReset)->isLastMonth()) {
            Cache::put('month_views', 0);
            Cache::put('last_monthly_reset', $now);
        }
    }
}
