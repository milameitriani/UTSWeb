<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\databarangModel;

class DatabarangController extends Controller
{
    public function __construct()
    {
        $this->databarangModel = new databarangModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'databarang' => $this->databarangModel->allData(),
        ];
        return view('databarang', $data);
    }
    public function detail($id_barang)
    {
        if (!$this->databarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data = [
            'databarang' => $this->databarangModel->detailData(($id_barang)),
        ];
        return view('detaildatabarang', $data);
    }

    public function add()
    {
        return view('adddatabarang');
    }

    public function insert()
    {
        Request()->validate([
            'nama_barang' => 'required|unique:data_barang,id_barang|min:1|max:11',
            'jumlah' => 'required',
            'foto_barang' => 'required',
        ],[
            'nama_barang.required' => 'wajib di isi',
            'nama_barang.unique' => 'nama_barang sudah ada',
            'nama_barang.min' => 'Min 1 Karakter',
            'nama_barang.max' => 'Max 11 Karakter',
            'jumlah.required' => 'wajib di isi',
            'foto_barang.required' => 'wajib di isi'
        ]);

        $file = Request()->foto_barang;
        $fileName = Request()->nama_barang . '.' . $file->extension();
        $file->move(public_path('foto_barang'), $fileName);

        $data = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'foto_barang' => $fileName,
        ];

        $this->databarangModel->addData($data);
        return redirect()->route('databarang')->with('pesan','Data berhasil Di Tambahkan');
    }

    public function edit($id_barang)
    {
        if (!$this->databarangModel->detailData($id_barang)) {
            abort(404);
        }
        $data = [
            'databarang' => $this->databarangModel->detailData(($id_barang)),
        ];
        return view('editdatabarang', $data);
    }
    public function update($id_barang)
    {
        Request()->validate([
            'nama_barang' => 'required|unique:data_barang,id_barang|min:1|max:11',
            'jumlah' => 'required',
            'foto_barang' => 'required',
        ],[
            'nama_barang.required' => 'wajib di isi',
            'nama_barang.unique' => 'nama_barang sudah ada',
            'nama_barang.min' => 'Min 1 Karakter',
            'nama_barang.max' => 'Max 11 Karakter',
            'jumlah.required' => 'wajib di isi',
            'foto_barang.required' => 'wajib di isi'
        ]);

        $file = Request()->foto_barang;
        $fileName = Request()->nama_barang . '.' . $file->extension();
        $file->move(public_path('foto_barang'), $fileName);

        $data = [
            'nama_barang' => Request()->nama_barang,
            'jumlah' => Request()->jumlah,
            'foto_barang' => $fileName,
        ];

        $this->databarangModel->editData($id_barang, $data);
        return redirect()->route('databarang')->with('pesan','Data berhasil Di Tambahkan');
    }
    public function delete($id_barang)
    {
        $this->databarangModel->deleteData($id_barang);
        return redirect()->route('databarang')->with('pesan','Data Di Hapus');
    }

}