<?php

namespace Fin\Http\Controllers\Site;

use Fin\Http\Controllers\SiteController;
use Fin\Models\Navigation;
use Fin\Repositories\NavigationsRepository;
use Illuminate\Http\Request;
use Fin\Http\Controllers\Controller;

class HomeController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new NavigationsRepository(new Navigation));
        $this->template = 'front.home';
    }

    public function show()
    {
        return $this->renderView();
    }
}
