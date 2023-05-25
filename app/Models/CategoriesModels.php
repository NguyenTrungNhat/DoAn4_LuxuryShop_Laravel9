<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriesModels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'ParentID',
        'SortOrder',
        'IsShowOnHome',
        'Status'
    ];
    public function CategoryTranslation(): HasMany
    {
        return $this->hasMany(CategoriestranslationModels::class,'CatID','Id');
    }
}