<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelompok_tani extends Model
{
    use HasFactory;
    public $primarykey = 'id_kelompok_tani';
    protected $fillable = ['nama_kelompok'];

    public function petanis()
    {
        return $this->hasMany(PendataanPetani::class,'id_kelompok_tani','id_kelompok_tani');
    }
}
