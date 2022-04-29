@extends('layout.template')
@section('title', 'Edit Barang')

@section('content')

<form action="/databarang/update/{{ $databarang->id_barang}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama_barang" class="form-control" value="{{ $databarang->nama_barang }}">
                    <div class="text-danger">
                        @error('nama_barang')
                        {{ $message }}
                        @enderror
                    </div> 

                    <label>Jumlah</label>
                    <input name="jumlah" class="form-control" value="{{ $databarang->jumlah }}">
                    <div class="text-danger">
                        @error('jumlah')
                        {{ $message }}
                        @enderror
                    </div>
            

                    <label>Foto barang</label>
                    <input type="file" name="foto_barang" class="form-control" value="{{ $databarang->foto_barang }}">
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