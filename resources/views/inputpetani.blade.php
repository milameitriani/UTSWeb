@extends('layout.template')
@section('title', 'INPUT PETANI')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form enctype='multipart/form-data' action="{{(isset($pendataan_petanis))?route('petani.update', $pendataan_petanis->id_petani):route('PendataanPetani.store')}}" method="POST">
        @csrf
        @if(isset($petani))@method('PUT')@endif
        <div class="box-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Petani" required value="{{( isset($pendataan_petanis))?$pendataan_petanis->nama:old('nama')}}" 
                class="form-control">@error('nama') {{$message}} @enderror
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="kelompok">Kelompok Tani</label>
                    <select id="kelompok" name="id_kelompok_tani" class="form-control">
                        <option value="">Pilih Kelompok Tani</option>
                        @foreach ($kelompoks as $item)<option value="{{$item->id_kelompok_tani}}"{{((isset($pendataan_petanis)&&$pendataan_petanis->id_kelompok_tani==$item->id_kelompok_tani) || old('id_kelompok_tani')==$item->id_kelompok_tani)?'selected':''}}> {{$item->nama_kelompok}}</option> 
                        @endforeach
                    </select>
                    @error('id_kelompok_tani')
                    <span class="text-sm">{{$message}} @enderror</span>
                </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" name="nik" id="nik" placeholder="NIK Anggota Tani" required value="{{(isset($pendataan_petanis))?$pendataan_petanis->nik:old('nik')}}"
                class="form-control">@error('nik') {{$message}} @enderror
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea name="alamat" id="alamat" cols="30" rows="2"
                class="form-control">
                {{(isset($pendataan_petanis))?$pendataan_petanis->alamat:old('alamat')}}
            </textarea>
            </div>
            <div class="form-group">
                <label for="foto">FOTO</label>
                <input type="file" name="foto" id="foto"
                class="form-control">
                @error('foto') {{$message}} @enderror
            <div class="form-group">
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>

@endsection