<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriestranslationModels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'categorytranslation';
    protected $fillable = [
        'CatID',
        'SeoDescription',
        'SeoTitle',
        'LanguageId',
        'SeoAlias',
        'Name'
    ];
}
