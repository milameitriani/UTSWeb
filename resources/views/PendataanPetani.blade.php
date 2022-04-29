@extends('layout.template')
@section('title', 'PENDATAAN PETANI')

@section('content')
<div class="box">
            <div class="box-header">
                <div class="btn-group">
                <a href="/inputpetani">
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-plus"></i>Tambah
                    </button>
                </a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Nama Kelompok</th>
      <th scope="col">NIK</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($pendataan_petanis as $item)
    <tr> 
      <td>{{$item->nama}}</td>
      <td>{{$item->kelompoktani->nama_kelompok}}</td>
      <td>{{$item->nik}}</td>       
      <td>{{$item->alamat}}</td>
      <td>
          <img src="{{ url ('foto_barang/'.$item->foto) }}" width="100px" alt="">
      </td>
      <td>
        <a href="/detail/" class="btn btn-sm btn-success">Detail</a>
        <a href="" class="btn btn-sm btn-warning">Edit</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
          Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection