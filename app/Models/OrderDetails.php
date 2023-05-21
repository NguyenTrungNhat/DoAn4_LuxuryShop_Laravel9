<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Orders;



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

    public function Order(): HasOne
    {
        return $this->hasOne(Orders::class,'Id','OrderID');
    }
    
}
