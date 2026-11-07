<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;

class Transaksi extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'tarif';

    protected $fillable = [
        'kendaraan_id',
        'waktu_masuk',
        'waktu_keluar',
        'tarif_id',
        'durasi_jam',
        'biaya_total',
        'status',
        'user_id',
        'area_parkir_id',
    ];

    #[Override]
    protected function casts()
    {
        return [
            'waktu_masuk' => 'datetime',
            'waktu_keluar' => 'datetime',
            'durasi_jam' => 'integer',
            'biaya_total' => 'decimal:2',
        ];
    }

    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }
    
    public function tarif(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function areaParkir(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

}
