<?php

namespace Fin\Http\Controllers\Site;

use Fin\Models\Navigation;
use Illuminate\Http\Request;
use Fin\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show() {
        dd(Navigation::all());
        return view('front.home');
    }
}
