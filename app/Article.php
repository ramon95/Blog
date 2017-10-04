<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model{

  /**
   * Return the sluggable configuration array for this model.
   *
   * @return array
   */

  protected $table = "articles";

  protected $fillable = ['title','content','category_id','user_id'];

  public function category(){
	 return $this->belongsTo('App\Category');
  }

  public function user(){
	 return $this->belongsTo('App\User');
  }

  public function image(){
	 return $this->hasMany('App\Image');
  }

  public function tags(){
    return $this->belongsToMany('App\Tag');
  }

}
