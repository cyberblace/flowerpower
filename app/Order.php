<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $timestamps = false;

    protected $casts = [
        'datetime' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderRules()
    {
        return $this->hasMany(OrderRule::class);
    }
}
