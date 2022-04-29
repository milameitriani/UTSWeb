<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $produk=[(object)[
            'nama' => 'Endek Bali',
            'harga' => '50000',
            'jenis' => 'Kain',
            'asal' => 'Gianyar'
        ],(object)[
            'nama' => 'Brokat Bunga',
            'harga' => '150000',
            'jenis' => 'Kain',
            'asal' => 'Buleleng'
        ],(object)[
            'nama' => 'Kebaya Modif',
            'harga' => '250000',
            'jenis' => 'Kebaya',
            'asal' => 'Karangasem'
        ],(object)[
            'nama' => 'Slendang Poleng',
            'harga' => '30000',
            'jenis' => 'Selendang',
            'asal' => 'Badung'
        ],(object)[
            'nama' => 'Kebaya',
            'harga' => '75000',
            'jenis' => 'Kebaya',
            'asal' => 'Buleleng'
        ]];

        $produk=collect($produk);
        return view('v_produk', compact('produk'));
    }
    public function tambah(){
        return view('v_info');
    }
}
