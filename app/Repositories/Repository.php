<?php

namespace Fin\Repositories;

use Fin\Models\Navigation;

abstract class Repository
{
    protected $model = false;

    public function getCollection()
    {
        $builder = $this->model->with('children')->where('parent_id','=',0)->get();

        return $builder;
    }
}
