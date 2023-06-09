<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'Active',
        'Address',
        'Avatar',
        'Birthday',
        'Email',
        'FullName',
        'LastLogin',
        'Password',
        'Phone'
    ];
}
