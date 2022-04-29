@extends('layout.template')
@section('title')

@section('content')

<form action="/databarang/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA BARANG</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                    <div class="text-danger">
                        @error('nama_barang')
                        {{ $message }}
                        @enderror
                    </div> 

                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" value="{{ old('jumlah') }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{ $message }}
                        @enderror
                    </div>
            

                    <label>Foto barang</label>
                    <input type="file" name="foto_barang" class="form-control" value="{{ old('foto_barang') }}">
                    <div class="text-danger">
                        @error('foto_barang')
                        {{ $message }}
                        @enderror
                    </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm">SIMPAN</button> 
            </div>

        </div>
    </div>

</form>


@endsection