<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCriteria;
use App\Models\Criteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubCriteriaController extends Controller
{
    public function index()
    {
        $data_sub = SubCriteria::all();

        return view('admin/package/subkriteria/index', ['data_sub' => $data_sub]);
    }

    public function tampilform()
    {
        $data_crt = Criteria::select('name')->get();
        return view('admin/package/subkriteria/create', [
            'data_crt' => $data_crt
        ]);
    }
}
