<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cc extends Model
{
//    use HasFactory;

    protected $table = 'cc';

    protected $fillable = [
        'user_id',
        'number',
        'name',
        'cvv',
        'expiry',
    ];

}
