<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $guarded = [];

    public function kelurahan()
    {
        return $this->belongsTo(kelurahan::class);
    }
    public function user()
    {
        // one one
        return $this->hasOne(user::class);
    }
}
