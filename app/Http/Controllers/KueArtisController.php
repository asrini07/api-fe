<?php

namespace App\Http\Controllers;

use App\KueArtis;
use Illuminate\Http\Request;

class KueArtisController extends Controller
{
    
    public function index()
    {
        $data = KueArtis::all();
        return response()->json([
            'status'        => true,
            'code'          => 0,
            'message' 	    => "success",
            'data'          => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $data = new KueArtis();
        $data->nama = $request->input('nama');
        $data->foto = $request->input('foto');
        $data->deskripsi = $request->input('deskripsi');
        $data->nama_pemilik = $request->input('nama_pemilik');
        $data->foto_pemilik = $request->input('foto_pemilik');

        if($data->save()){

            return response()->json([
                'status'        => true,
                'code'          => 0,
                'message' 	    => "success",
                'data'          => $data
            ], 200);

        } else{

            return response()->json([
                'status'        => false,
                'code'          => 0,
                'message' 	    => "data is not saved",
                'data'          => null
            ], 400);
        
        }

    }

    public function show($id)
    {
        $data = KueArtis::find($id);

        if(!$data){

            return response()->json([
                'status'        => false,
                'code'          => 0,
                'message' 	    => "data is not found",
                'data'          => null
            ], 400);

        }else{

            return response()->json([
                'status'        => true,
                'code'          => 0,
                'message' 	    => "success",
                'data'          => $data
            ], 200);

        }
    }
    public function update(Request $request, $id)
    {
        $data = KueArtis::find($id);
        $data->nama = $request->input('nama');
        $data->foto = $request->input('foto');
        $data->deskripsi = $request->input('deskripsi');
        $data->nama_pemilik = $request->input('nama_pemilik');
        $data->foto_pemilik = $request->input('foto_pemilik');
        

        if($data->save()){

            return response()->json([
                'status'        => true,
                'code'          => 0,
                'message' 	    => "success",
                'data'          => $data
            ], 200);

        } else{

            return response()->json([
                'status'        => false,
                'code'          => 0,
                'message' 	    => "data is not updated",
                'data'          => null
            ], 400);
        
        }
    }

    public function destroy($id)
    {
        $data = KueArtis::find($id);

        if(!$data){

            return response()->json([
                'status'        => false,
                'code'          => 0,
                'message' 	    => "data is not found",
                'data'          => null
            ], 400);

        }else{
            $data->delete();
            return response()->json([
                'status'        => true,
                'code'          => 0,
                'message' 	    => "success",
                'data'          => $data
            ], 200);

        }
    }
}
