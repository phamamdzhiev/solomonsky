<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HomeController extends Controller
{

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $holidays = Holiday::all()
            ->where('isActive', true)
            ->take(8);
        return view('home')->with('holidays', $holidays);
    }

    public function singleHoliday($id)
    {
        $singleHoliday = Holiday::find($id);
        return view('pages.singleHoliday')->with('singleHoliday', $singleHoliday);
    }
}
