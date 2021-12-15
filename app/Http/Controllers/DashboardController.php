<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $course = Auth::user()->course;
        return view(
            'dashboard',
            [
                'course' => $course ?? null,
                'topics' => optional($course)->topics
            ]
        );
    }
}
