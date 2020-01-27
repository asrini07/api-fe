<?php

namespace App\Http\Controllers;

use App\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{

    public function index()
    {
        $data = Kuliner::all();
        return response()->json([
            'status'        => true,
            'code'          => 0,
            'message' 	    => "success",
            'data'          => $data
        ], 200);

    }

    public function store(Request $request)
    {
        $data = new Kuliner();
        dd($data);
        $data->nama = $request->input('nama');
        $data->foto = $request->input('foto');
        $data->deskripsi = $request->input('deskripsi');

        if($data->save()){
            $res["message"]="Sukses";
            $res["status"]=200;
            $res["value"]=$data;
            return response($res);

        } else{
            $res["message"]="Gagal";
            $res["status"]=400;
            return response($res);
        }

    }

    public function show($id)
    {
        $data=Kuliner::find($id);

        if(!$data){
            return response()->json([
                'success' => false,
                'status' => 400,
                'message' => 'mahasiswa with nim ' . $id . ' not found'
            ], 400);
        }else{
            return response()->json([
                'success' => true,
                'status' => 200,
                'message' => $data
            ], 200);
        }
    }
    public function update(Request $request, Kuliner $kuliner)
    {
        //
    }

    public function destroy(Kuliner $kuliner)
    {
        //
    }
}
