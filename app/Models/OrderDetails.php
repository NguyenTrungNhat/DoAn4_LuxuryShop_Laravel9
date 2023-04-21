<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'orderdetails';
    protected $fillable = [
        'Amount',
        'Discount',
        'OrderID',
        'OrderNumber',
        'Price',
        'ProductID',
        'TotalMoney',
    ];
}
