@extends('layout.template')
@section('title','DETAIL DATABARANG')

@section('content')
<table class="table">
    <tr>
        <th>ID BARANG</th>
        <th>:</th>
        <th>{{ $databarang->id_barang}}</th>
    </tr> 
    <tr>
        <th>NAMA BARANG</th>
        <th>:</th>
        <th>{{ $databarang->nama_barang }}</th>
    </tr>
    <tr>
        <th>JUMLAH</th>
        <th>:</th>
        <th>{{ $databarang->jumlah }}</th>
    </tr>
    <tr>
        <th width="150px">FOTO</th>
        <th width="30px">:</th>
        <th><img src="{{ url('foto_barang/'.$databarang->foto_barang) }}" width="300px"></th>
    </tr>
    
</table>
    <tr>
        <a href="/databarang" class="btn btn-success tbn-sm">Kembali</a>
    </tr>
@endsection