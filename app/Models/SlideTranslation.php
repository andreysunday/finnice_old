<?php

namespace Fin\Models;

use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{
    protected $table = 'slide_translations';
    public $timestamps = false;
    protected $fillable = ['title','alt','text'];
}
