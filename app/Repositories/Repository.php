<?php

namespace Fin\Repositories;

use Fin\Models\Slide;

abstract class Repository
{
    protected $model = false;

    public function getCollection($model_name = false)
    {
        if($model_name == 'Navigation') {
            $builder = $this->model->with('children')->where('parent_id','=',0)->get();
            return $builder;
        }
        //if($model_name == 'Slide') {
            $builder = $this->model->get();
            return $builder;
        //}
    }
}
