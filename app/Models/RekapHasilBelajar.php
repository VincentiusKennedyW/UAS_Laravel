<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapHasilBelajar extends Model
{
    use HasFactory;

    protected $table = 'rekap_hasil_belajar';

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'id');
    }
}
