<?php

namespace Fin\Repositories;

use Fin\Models\Slide;

class SlidesRepository extends Repository
{
    public function __construct(Slide $slide)
    {
        $this->model = $slide;
    }
}