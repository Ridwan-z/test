<?php

namespace App\Http\Controllers;
use App\Models\Username;
use Illuminate\Http\Request;

class UsernameController extends Controller
{
    public function index(){
        $username = Username::paginate(5);
        
        return view('Username/index',compact('username'));
    }
    public function tambah(){
        $user = Username::all();
        return view('Username/tambah',compact('user'));
    }
    public function create(Request $request){
        Username::create([
            'id_user'=>$request->id_user,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'akses'=>$request->akses
        ]);
        return redirect('/');
    }
    public function hapus($id){
        $username = Username::findOrFail($id);
        $username->delete();
        return redirect('/');
    }
    public function edit($id){
        $username = Username::find($id);
        
        return view ('Username/edit',compact('transaksi','user'));
    }
    public function editData($id,Request $request){
        $transaksi = Username::with('username')->find($id);
        
        $username->update([
            'id_user'=>$request->id_user,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'akses'=>$request->akses
        ]);
        return redirect('/');
    }
}
    



