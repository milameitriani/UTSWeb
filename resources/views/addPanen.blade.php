@extends('layout.template')
@section('title')

@section('content')
<div class="box box-primary">
            <center>
            <div class="box-header with-border">
              <h1 class="box-title">TAMBAH PANEN</h1>
            </div>
            </center>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('panen.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="@error('produkName')@enderror form-control" placeholder="Nama Panen">
                  <span class="text-sm">@error('produkName') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kelompok Tani</label>
                  <input type="text" class="@error('kelompok_tani')@enderror form-control" placeholder="Kelompok Tani">
                  <span class="text-sm">@error('kelompok_tani') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Perkiraan Panen</label>
                  <input type="date" class="@error('perkiraanpanenDate')@enderror form-control" placeholder="Perkiraan Panen">
                  <span class="text-sm">@error('perkiraanpanenDate') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Perkiraan Jumlah</label>
                  <input type="number" class="@error('perkiraanpanenJumlah')@enderror form-control" placeholder="Perkiraan Jumlah">
                  <span class="text-sm">@error('perkiraanpanenJumlah') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Panen</label>
                  <input type="date" class="@error('panenDate')@enderror form-control" placeholder="Tanggal Panen">
                  <span class="text-sm">@error('panenDate') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="number" class="@error('PanenJumlah')@enderror form-control" placeholder="Jumlah">
                  <span class="text-sm">@error('panenJumlah') {{$message}} @enderror</span>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection