<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{

    public function index()
    {
        $data = Wisata::all();
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

    public function show(Wisata $wisata)
    {
        //
    }

    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    public function destroy(Wisata $wisata)
    {
        //
    }
}
