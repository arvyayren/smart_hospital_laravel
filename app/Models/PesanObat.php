<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanObat extends Model
{
    use HasFactory;

    protected $table = 'pesan_obat';

    protected $fillable = ['id_pasien','waktu','alamat','lat','lng','list_pesanan','total_biaya','ket'];
}
