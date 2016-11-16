<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComboSale extends Model
{
    //
    public function orders()
    {
        return $this->morphToMany('App\Order', 'orderable');
    }
}
