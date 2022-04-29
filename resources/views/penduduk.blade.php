@extends('layout.v_template')
@section('title', 'Produk')

@section('content')
<form role="form">
    <div class="box-body">
        <div class="form-group">
            <label for="">Masukan Id Penduduk</label>
            <input type="number" class="form-control" id="" placeholder="Id Penduduk">
        </div>
        <div class="form-group">
            <label for="">Masukan NIK</label>
            <input type="text" class="form-control" id="" placeholder="NIK">
        </div>
        <div class="form-group">
            <label for="">Masukan Nama Penduduk</label>
            <input type="number" class="form-control" id="" placeholder="Nama Penduduk">
        </div>
        <div class="form-group">
            <label for="">Masukan </label>
            <input type="number" class="form-control" id="" placeholder="Nama Penduduk">
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection