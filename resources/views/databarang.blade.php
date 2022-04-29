@extends('layout.template')
@section('title')

@section('content')
<center>
    <h1>DATA BARANG SUKA DUKA LABA SARI</h1>
</center>
@if (session('pesan')) 
    <div class="alert alert-success alert-dismissible">
        <button type="butten" class="clole" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success</h4>
        {{session('pesan') }}.
    </div>
@endif
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="table-responsive">
                    <a href="/databarang/add" class="btn btn btn-primary btn-sm">Tambah</a>
                </div>
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama barang</th>
                            <th>Jumlah</th>
                            <th>Foto Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($databarang as $data)
                        <tr>
                            <td><input type="checkbox" class="flat-red">
                                {{$no++}}
                            </td>
                            <td>
                                {{$data->nama_barang}}
                            </td>
                            <td>
                                {{$data->jumlah}}
                            </td>
                            <td>
                            <img src="{{ url ('foto_barang/'.$data->foto_barang) }}" width="100px" alt="">
                            </td>

                            <td>
                                <a href="/databarang/detail/{{ $data->id_barang }}" class="btn btn-sm btn-success">Detail</a>
                                <a href="/databarang/edit/{{ $data->id_barang }}" class="btn btn-sm btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $data->id_barang }}"> Delete 
                                </button>

                            </td>
                        </tr>
            </div>
        </div>
        @endforeach
                    </tbody>
                </table>
                @foreach ($databarang as $data)
                <div class="modal modal-danger fade" id="delete{{ $data->id_barang }}">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>Yakin ingin menghapus data ini...?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                <a href="/databarang/delete/{{$data->id_barang}}" class="btn btn-outline">Yes</a>
                            </div>
                        </div>
                        @endforeach
                
                    </div>
                </div>


        @endsection