<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use App\Article;
class category extends Model
{
    //

    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    protected $fillable=['name','slug'];
}

