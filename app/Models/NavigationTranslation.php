<?php

namespace Fin\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}
