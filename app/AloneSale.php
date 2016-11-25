<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AloneSale extends Model
{

	protected $table ='alone_sales';
  	protected $fillable = ['rate', 'began_at', 'ended_at'];
  	protected $guarded = ['product_id'];
  	public $timestamp = true;

  	public function product() {
  		return $this->belongsTo('App\Product');
  	}
}
