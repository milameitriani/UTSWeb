<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panen extends Model
{
    use HasFactory;
    public $primarykey = 'panenID';
    protected $fillable = [
        'produksID','id_kelompok_tani','user_id',
        'perkiraanpanenDate','perkiraanpanenJumlah',
        'panenDate','panenJumlah','satuan'
    ];
    static public function getPanen(){
        $return=DB::table('panens')
        ->join('produks','panens.produksID','produks,produksID');
        return $return;

    }
    public function produk(){
        return $this->belongsTo(Produk::Class,'produksID','produksID'); 
    }

}
