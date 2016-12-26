<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    protected $table = 'shipping_infos';
    protected $guarded = ['id'];

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
}
