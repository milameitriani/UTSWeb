@extends('layout.template')
@section('title', 'DAFTAR PANEN')

@section('content') 
          <div class="box">
            <div class="box-header">
                <div class="btn-group">
                <a href="/addpanen">
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-plus"></i>Tambah
                    </button>
                </a>
            </div>
        </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Kelompok Tani</th>
      <th scope="col">Perkiraan panen</th>
      <th scope="col">Perkiraan Jumlah</th>
      <th scope="col">Tanggal Panen</th>
      <th scope="col">Jumlah Panen</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($panens as $item)
    <tr> 
      <td>{{$item->produkName}}</td>
      <td>{{$item->kelompok_tani}}</td>       
      <td>{{$item->perkiraanpanenDate}}</td>
      <td>{{$item->perkiraanpanenJumlah}}</td>
      <td>{{$item->panenDate}}</td>
      <td>{{$item->panenJumlah}}</td> 
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