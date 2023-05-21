<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'Address',
        'CustomerID',
        'Deleted',
        'Note',
        'Paid',
        'Phone',
        'TotalMoney',
        'TransactStatusID',
    ];
    public function Customer()
    {
        return $this->belongsTo(Customers::class,'CustomerID','Id');
    }
}
