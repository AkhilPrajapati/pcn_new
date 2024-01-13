<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $media = Media::all();
        return view('frontend.home', compact('media'));
    }
    public function testing()
    {
        $array_data = ['akhil', 'anil', 'anu'];
        $data = implode(",", $array_data,);
        return $data;
        return $array_data;
        return view('testing');
    }
}
