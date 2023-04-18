<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModels extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'Active',
        'BestSellers',
        'CatID',
        'DateCreated',
        'DateModified',
        'Discount',
        'HomeFlag',
        'SeoAlias',
        'Title',
        'UnitsInStock'
    ];
}