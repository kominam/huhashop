<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
{
  use Sluggable;
  use SluggableScopeHelpers;

  protected $table ='categories';
  protected $fillable = ['name', 'description'];
  public $timestamp = true;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
  public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
  }

  public function products() {
  	return $this->hasMany('App\Product');
  }
}
