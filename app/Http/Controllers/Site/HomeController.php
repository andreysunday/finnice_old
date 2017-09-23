<?php

namespace Fin\Http\Controllers\Site;

use Fin\Http\Controllers\SiteController;
use Fin\Models\Navigation;
use Fin\Models\Region;
use Fin\Models\Slide;
use Fin\Repositories\NavigationsRepository;
use Fin\Repositories\SlidesRepository;
use Fin\Traits\ManagesImages;
use Illuminate\Http\Request;
use Fin\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends SiteController
{
    use ManagesImages;

    public function __construct(SlidesRepository $rep_sldr)
    {
        parent::__construct(new NavigationsRepository(new Navigation));
        $this->rep_sldr = $rep_sldr;
        $this->template = 'front.home';
    }

    public function index()
    {
        //$regions_cf = Config::get('defaults-finnice.regions');
        $regions = Region::all()->where('alias','ss')->first();
        foreach($regions->slides as $slide) {
            //dd($slide->image_name);
        }

        $slide = Slide::find(7);

        //dd($slide->region->name);



        $slides = $this->getSlides();
        //dd($slides);
        $slider = view('front.layer-slider')->with('slides',$slides)->render();
        $this->tmp_vars = array_add($this->tmp_vars, 'slider', $slider);
        //dd($slider);

        return $this->renderView();
    }

    public function getSlides()
    {
        $slides = $this->rep_sldr->getCollection('Slide')->random(10);

        return $slides;
    }
}
