<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AhpController extends Controller
{

    public function indexbobot()
    {
        DB::table('hasils')->delete();
        return view('admin/package/ahp/bobot');
    }
}
