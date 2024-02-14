<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'account_id',
        'item_id',
    ];

    public function item(){
        return $this->hasMany('item_id');
    }

    public function account(){
        return $this->hasOne('account_id');
    }
}
