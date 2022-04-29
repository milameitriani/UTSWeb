<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendataanPetani extends Model
{
    use HasFactory;
    public $primaryKey = 'id_petani';
    protected $fillable = [
        'nama','nik','alamat','foto','id_kelompok_tani'
    ];

    public function kelompoktani(){
        return $this->belongsTo(kelompok_tani::class,'id_kelompok_tani','id_kelompok_tani');
    }
}
