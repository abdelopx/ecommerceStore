<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'productcode';
    protected $fillable = ['productcode','description','indate','quantityonhand','price','discount','supplier','path'];



}
