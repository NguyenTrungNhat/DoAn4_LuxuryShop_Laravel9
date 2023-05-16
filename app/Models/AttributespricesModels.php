<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributespricesModels extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'attributesprices';
    protected $fillable = [
        'Active',
        'Price',
        'ProductID'
    ];
}
