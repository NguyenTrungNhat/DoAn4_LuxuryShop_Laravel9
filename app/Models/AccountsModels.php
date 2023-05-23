<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsModels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = [
        'Active',
        'LastLogin',
        'Password',
        'RoleID',
        'Salt',
        'UserID',
        'UserName'
    ];
}
