<?php

namespace Fin\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use Translatable;

    protected $table = 'regions';
    protected $translatedAttributes = ['name'];
    protected $fillable = ['mod','alias','image_name','image_extension'];

    public function slides()
    {
        return $this->hasMany('Fin\Models\Slide');
    }
}
