<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderRule extends Model
{
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
