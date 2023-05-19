<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProducttranslationModels;
use App\Models\AttributespricesModels;
use App\Models\ListImageProductModels;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductsModels extends Model
{
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
    public function ProductTranslation(): HasMany
    {
        return $this->hasMany(ProducttranslationModels::class,'ProductId','Id')->where('LanguageId','=','vi-VN');
    }

    public function AttributesPrice(): HasOne
    {
        return $this->hasOne(AttributespricesModels::class,'ProductID','Id');
    }

    public function ListImageProduct(): HasMany
    {
        return $this->hasMany(ListImageProductModels::class,'ProductID','Id');
    }
}