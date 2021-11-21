<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Inertia\Inertia;

class InspireController extends Controller
{
    public function index()
    {
        $insp = Artisan::call('inspire');
        $out = Artisan::output();
        $rend = Inertia::render('Inspire/Index', ['out' => $out]);
        return $rend;
    }
}