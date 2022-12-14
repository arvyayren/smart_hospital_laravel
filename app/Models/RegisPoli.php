<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisPoli extends Model
{
    use HasFactory;
    
    protected $table = 'regis_poli';

    protected $fillable = ['id_pasien','id_dokter','tgl_booking','poli'];
}
