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
        //
    }

    public function show(KueArtis $kueArtis)
    {
        //
    }

    public function update(Request $request, KueArtis $kueArtis)
    {
        //
    }

    public function destroy(KueArtis $kueArtis)
    {
        //
    }
}
