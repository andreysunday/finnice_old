<?php

namespace Fin\Repositories;

use Fin\Models\Navigation;

class NavigationsRepository extends Repository
{
    public function __construct(Navigation $navigation)
    {
        $this->model = $navigation;
    }
}