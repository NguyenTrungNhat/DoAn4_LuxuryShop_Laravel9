<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListImageProductModels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'listproductimage';
    protected $fillable = [
        'ProductID',
        'ImagePath',
        'Caption',
        'IsDefault',
        'SortOrder',
        'FileSize'
    ];
}
