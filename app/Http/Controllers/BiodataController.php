<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $biodata = Biodata::all();
        return response()->json($biodata);
    }

    public function createBiodata(Request $request){
 
        $biodata = Biodata::create($request->all());
        return response()->json($biodata);
 
    }

    public function deleteBiodata($id){
        $biodata  = Biodata::find($id);
        $biodata->delete();
 
        return response()->json('Removed successfully.');
    }

    public function updateBiodata(Request $request,$id){
        $biodata = Biodata::find($id);
        $biodata->nama = $request->input('nama');
        $biodata->nim = $request->input('nim');
        $biodata->alamat = $request->input('alamat');
        $biodata->save();
 
        return response()->json($biodata);
    }
}
