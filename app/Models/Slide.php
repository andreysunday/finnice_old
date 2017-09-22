<?php

namespace Fin\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use Translatable;

    public $translatedAttributes = ['title','alt','text'];

    protected $table = 'slides';
    protected $fillable = ['region_id','mod','alias','image_name','image_extension'];

    public function region()
    {
        return $this->belongsTo('Fin\Models\Region');
    }

}
