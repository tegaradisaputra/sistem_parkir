<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LogAktivitas;

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
        'user_id'
    ];

    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    protected static function booted()
    {
        static::created(function ($kendaraan) {
            LogAktivitas::create([
                'user_id' => auth()->id() ?? 1,
                'aktivitas' => 'Menambahkan data kendaraan baru dengan plat nomor: ' . $kendaraan->plat_nomor,
                'waktu_aktivitas' => now()
            ]);
        });

        static::updated(function ($kendaraan) {
            LogAktivitas::create([
                'user_id' => auth()->id() ?? 1,
                'aktivitas' => 'Mengubah data kendaraan baru dengan plat nomor: ' . $kendaraan->plat_nomor,
                'waktu_aktivitas' => now()
            ]);
        });
        
        static::deleted(function ($kendaraan) {
            LogAktivitas::create([
                'user_id' => auth()->id() ?? 1,
                'aktivitas' => 'Menghapus data kendaraan baru dengan plat nomor: ' . $kendaraan->plat_nomor,
                'waktu_aktivitas' => now()
            ]);
        });
    }
}
