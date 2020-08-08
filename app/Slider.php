<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable=['name','image','status','text'];
    protected $attributes=['status'=>0];
}
