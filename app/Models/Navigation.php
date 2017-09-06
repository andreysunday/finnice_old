<?php

namespace Fin\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['name', 'alias', 'parent_id'];
}
