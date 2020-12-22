<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'order_details_id';
    protected $table = 'order_details';
    protected $fillable = ['order_id','order_details_id','o_productcode','quantity','unitprice','discount'];
}
