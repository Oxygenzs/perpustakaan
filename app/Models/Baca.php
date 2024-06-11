<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baca extends Model
{
    use HasFactory;
    protected $fillable = [
        'buku_id',
        'user_id',
        'tanggal',
        'waktu_baca_terakhir',
    ];
        public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
        public function user()
    {
        return $this->belongsTo(User::class);
    }
}
