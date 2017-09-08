<?php

namespace Fin\Http\Controllers\Site;

use Fin\Models\Navigation;
use Illuminate\Http\Request;
use Fin\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show() {

        $menuItems = Navigation::with('children')->where('parent_id','=',0)->get();
        //dd($categories);
        return view('front.home',['menuItems'=>$menuItems]);

        //return view('front.home');
    }
}
