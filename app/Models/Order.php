<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'order_id';
    protected $fillable = ['order_id','user_id','order_date','order_status','shipping_address'];

}
