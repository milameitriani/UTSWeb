@extends('layout.v_template')
@section('title', 'Produk')

@section('content')
<form role="form">
    <div class="box-body">
        <div class="form-group">
            <label for="">Masukan Id Barang</label>
            <input type="number" class="form-control" id="" placeholder="Id Barang">
        </div>
        <div class="form-group">
            <label for="">Masukan Nama Barang</label>
            <input type="text" class="form-control" id="" placeholder="Nama Barang">
        </div>
        <div class="form-group">
            <label for="">Masukan Jumlah</label>
            <input type="number" class="form-control" id="" placeholder="Jumlah">
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection