<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
//    use HasFactory;

    protected $table = 'pitches';

    protected $fillable = [
        'pitcher',
        'industry',
        'title',
        'target',
        'minimum',
        'about',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static public function getPitch()
    {
        return Pitch::select('pitches.*')
//            ->where('is_admin', '=', 0)
//            ->where('is_delete', '=', 0);
            ->orderByDesc('pitches.id')
            ->get();

    }
}
