<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Produk extends Model
{
    use HasFactory;
    public $primarykey = 'produksID';
    public function panens(){
        return $this->hasMany(Panen::class,'produksID','produksID');
    }
}
