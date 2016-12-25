<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AloneSale extends Model
{

	protected $table ='alone_sales';
  	protected $guarded = ['id'];
  	public $timestamp = true;

  	public function product() {
  		return $this->belongsTo('App\Product');
  	}
}
