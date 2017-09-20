<?php

namespace Fin\Http\Controllers;

use Fin\Models\Navigation;
use Fin\Repositories\NavigationsRepository;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $rep_navi;
    protected $rep_sldr;

    protected $template;
    protected $tmp_vars = array();

    public function __construct(NavigationsRepository $navigation)
    {
        $this->rep_navi = $navigation;
    }

    protected function renderView()
    {
        //get collection of Navigation
        $menuItems = $this->getNavigation();
        $header = view('front.header')->with(compact('menuItems'))->render();

        $this->tmp_vars = array_add($this->tmp_vars, 'header', $header);

        return view($this->template)->with($this->tmp_vars);
    }

    protected function getNavigation()
    {
        $menuItems = $this->rep_navi->getCollection('Navigation');

        return $menuItems;
    }
}
