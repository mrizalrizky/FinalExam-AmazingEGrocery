<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function orders() {
        return $this->belongsTo(Order::class, 'orders', 'item_id');
    }

    public function user() {
        return $this->belongsToMany(User::class, 'orders', 'account_id')->withPivot('price');
    }
}
