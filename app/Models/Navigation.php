<?php

namespace Fin\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use Translatable;

    protected $table = 'navigations';
    public $translatedAttributes = ['name'];
    protected $fillable = ['name', 'alias', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo('Fin\Models\Navigation', 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Fin\Models\Navigation', 'parent_id', 'id');
    }
}
