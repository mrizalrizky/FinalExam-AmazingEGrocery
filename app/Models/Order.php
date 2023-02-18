<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'item_id',
        'price',
    ];

    // public function items() {
    //     return $this->hasOne(Item::class, 'id', 'item_id');
    // }
}
