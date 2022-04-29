<?php

namespace App\Http\Controllers;
use App\Models\PendataanPetani;
use App\Models\kelompok_tani;
use Illuminate\Http\Request;

class PendataanPetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    {
            $title="Pendataan Petani";
            $pendataan_petanis=new PendataanPetani;
            $pendataan_petanis=$pendataan_petanis->all();
    
            return view('PendataanPetani',compact('title','pendataan_petanis'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Petani";
        $kelompoks=kelompok_tani::all();
        return view('inputpetani',compact('title','kelompoks'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap', 
            'numeric' => 'Kolom :attribute Harus Angka.', 
            'file'=>'Perhatikan format dan ukuran file'
            ];

        $validasi=$request->validate([ 
            'nik'=>'required|numeric|digits:16', 
            'nama'=>'required',
            'alamat'=>'', 
            'foto' => 'required|mimes:png,jpg|max:1024', 
            'id_kelompok_tani'=>'required'
        ], $messages); 
        try {
            $fileName = time().$request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/pendataan_petanis',$fileName);
            $validasi['foto']=$path;
            $response = PendataanPetani::create($validasi); 
            return redirect('PendataanPetani');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="Input Petani";
        $kelompoks=kelompok_tani::all();
        $pendataan_petanis=PendataanPetani::find($id); 
        if($pendataan_petanis != NULL){
            $title="Edit Data ".$pendataan_petanis->nama;
            return view('inputpetani',compact('title','kelompoks','petani'));
        }else{
            return view('inputpetani',compact('title','kelompoks'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi=$request->validate([ 
            'nik'=>'required|numeric', 
            'nama'=>'required', 
            'alamat'=>'', 
            'foto' => '', 
            'id_kelompok_tani'=>'required'
        ]);
        try {
            if($request->file('foto')){
                $fileName = time().$request->file('foto')->getClientOriginalName();
                $path = $request->file('foto')->storeAs('uploads/petanis',$fileName);
                $validasi['foto']=$path;
            }
            $response = Petani::find($id);
            $response->update($validasi); return redirect('petani');
            } catch (\Exception $e) { echo $e->getMessage();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $pendataan_petanis=PendataanPetani::find($id);
            $pendataan_petanis->delete();
            return redirect('petani');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

}
