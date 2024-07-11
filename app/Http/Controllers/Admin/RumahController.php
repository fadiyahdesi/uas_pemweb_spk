<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alternative;
use App\Models\SubCriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilform()
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Lantai')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Kamar')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Garasi')->get();
        return view('admin/package/rumah/create', [
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function index()
    {
        $data_rumah = Alternative::all();
        return view('admin/package/rumah/index', [
            'data_rumah' => $data_rumah
        ]);
    }

    public function tampileditrumah($id)
    {
        $data_crtlt = SubCriteria::select('nilaik')->where('name','Lantai')->get();
        $data_crtkm = SubCriteria::select('nilaik')->where('name','Kamar')->get();
        $data_crtgr = SubCriteria::select('nilaik')->where('name','Garasi')->get();
        $data_rumah = DB::table('alternatives')->where('id', $id)->get();
        return view('admin/package/rumah/update', [
            'data_rumah' => $data_rumah,
            'data_crtlt' => $data_crtlt,
            'data_crtkm' => $data_crtkm,
            'data_crtgr' => $data_crtgr
        ]);
    }

    public function postrumah(Request $request)
    {
        
    }

    public function updaterumah(Request $request)
    {
        
    }

    public function delrumah($tipe){
       
    }
}
