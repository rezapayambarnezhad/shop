<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
use App\Article;
class Comment extends Model
{


    public function article(){
        return $this->belongsTo(Article::class);
    }
//
//
    protected $fillable=['name','body','email','status'];
    protected $attributes=['status'=>0];

}
