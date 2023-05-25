<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProducttranslationModels extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'producttranslation';
    protected $fillable = [
        'Description',
        'Details',
        'LanguageId',
        'Name',
        'ProductId',
        'SeoAlias',
        'SeoDescription',
        'Seotitle'
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(ProductsModels::class, 'ProductId', 'Id');
    }
}
