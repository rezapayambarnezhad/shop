<?php

namespace App;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use App\category;
class Article extends Model
{

    public function categories(){
        return $this->belongsToMany(category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }


    protected $fillable=['name','main_price','suggest_price','off_price','slug','user_id','status','desc','image'];
    protected $attributes=['hit'=>10,'suggestion'=>0];

}
