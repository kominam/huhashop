<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class ComboSale extends Model
{
	use Sluggable;
  	use SluggableScopeHelpers;

	protected $table ='combo_sales';
  	protected $fillable = ['name', 'description', 'original_total_price', 'combo_sale_price', 'began_at', 'ended_at'];
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
    //
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }

    public function products() {
    	return $this->belongsToMany('App\Product','combo_sale_product', 'combo_sale_id', 'product_id');
    }
}
