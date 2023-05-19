<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


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

    public function Product(): HasOne
    {
        return $this->hasOne(ProductsModels::class,'Id','ProductID');
    }
}
