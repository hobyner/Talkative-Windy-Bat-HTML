<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
  //  use HasFactory;

  protected $table = 'trunk';

    protected $fillable = [
        'user_id',
        'rout',
        'acct',
        'amount',
        'address',
        'rep',
        'email',
        'phone',
    ];

    static public function getTransfer()
    {
        return Transfer::select('trunk.*')
            ->orderByDesc('trunk.id')
            ->get();

    }

    static public function getSingle($id) {
        return Transfer::find($id);
    }
}
