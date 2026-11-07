<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'kendaraan';

    protected $fillable = [
        'plat_nomor',
        'jenis_kendaraan',
        'warna',
        'pemilik',
    ];

    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}
