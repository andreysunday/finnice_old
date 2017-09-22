<?php

namespace Fin\Models;

use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{
    protected $table = 'slide_translations';
    protected $fillable = ['title','alt','text'];
}
