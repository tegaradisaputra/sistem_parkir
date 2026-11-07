<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaParkir extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $table = 'area_parkir';

    protected $fillable = [
        'nama_area',
        'kapasitas',
        'terisi',
    ];

    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}
