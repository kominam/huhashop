<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
    {
        return $this->morphedByMany('App\Product', 'orderable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function combo_sales()
    {
        return $this->morphedByMany('App\ComboSale', 'orderable');
    }
}
