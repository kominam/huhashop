<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $fillable = ['is_paid', 'total'];
    protected $guarded = ['user_id'];
    public $timestamp = true;
    public function products()
    {
        return $this->morphedByMany('App\Product', 'orderable')->withPivot('quantity');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function combo_sales()
    {
        return $this->morphedByMany('App\ComboSale', 'orderable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
