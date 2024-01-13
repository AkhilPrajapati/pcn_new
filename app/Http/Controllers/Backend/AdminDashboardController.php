<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Editor;
use App\Models\Media;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class AdminDashboardController extends Controller
{
    public function admin_dashboard()
    {

       



        $media_data = Media::latest()->limit(10)->get();
        $total_media_count = Count(Media::all());
        $approved_media_count = Count(Media::where('status', 'approved')->get());
        $pending_media_count = Count(Media::where('status', 'pending')->get());
        $this_month_request = Media::whereMonth('created_at', Carbon::now()->month)->count();

        $day1 = Media::whereDay('created_at', Carbon::now()->day)->count();
        $day2 = Media::whereDay('created_at', Carbon::now()->day-1)->count();
        $day3 = Media::whereDay('created_at', Carbon::now()->day-2)->count();
        $day4 = Media::whereDay('created_at', Carbon::now()->day-3)->count();
        $day5 = Media::whereDay('created_at', Carbon::now()->day-4)->count();
        $day6 = Media::whereDay('created_at', Carbon::now()->day-5)->count();
        $day7 = Media::whereDay('created_at', Carbon::now()->day-6)->count();
        $this_week_request = $day1 + $day2 + $day3 + $day4 + $day5 + $day6 + $day7;

        return view('backend.dashboard.dashboard', compact('this_month_request', 'total_media_count', 'approved_media_count', 'this_week_request', 'media_data', 'pending_media_count'));
    }
}
