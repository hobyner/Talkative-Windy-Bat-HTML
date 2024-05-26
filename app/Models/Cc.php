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

    static public function getCc()
    {
        return Cc::select('cc.*')
//            ->where('is_admin', '=', 0)
//            ->where('is_delete', '=', 0);
            ->orderByDesc('cc.user_id')
            ->get();

    }

    static public function getSingle($id) {
        return Cc::find($id);
    }

}
