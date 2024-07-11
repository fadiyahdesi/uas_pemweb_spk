<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilform()
    {
        return view('admin/package/user/create');
    }

    public function index()
    {
        $data_user = DB::table('users')->get();
        return view('admin/package/user/index', ['data_user' => $data_user]);
    }

    public function tampiledituser($id)
    {
        $data_user = DB::table('users')->where('id', $id)->get();
        return view('admin/package/user/update', ['data_user' => $data_user]);
    }

    public function postuser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/user');
    }

    public function updateuser(Request $request)
    {
        DB::table('users')->where('email', $request->email)->update([
            'name' => $request->name,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/user');  
    }

    public function deluser($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin/user');
    }
}
