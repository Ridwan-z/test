<?php

namespace App\Http\Controllers;
use App\Models\Username;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::paginate(5);
        
        return view('Transaksi/index',compact('transaksi',));
    }
    public function tambah(){
        $user = Username::all();
        return view('Transaksi/tambah',compact('user'));
    }
    public function create(Request $request){
        Transaksi::create([
            'id_transaksi'=>$request->id_transaksi,
            'tgl_trx'=>$request->tgl_trx,
            'id_user'=>$request->id_user,
            'total_bayar'=>$request->total_bayar,
            'bayar'=>$request->total_bayar
        ]);
        return redirect('/');
    }
    public function hapus($id){
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect('/');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        
        return view ('Transaksi/edit',compact('transaksi','user'));
    }
    public function editData($id,Request $request){
        $transaksi = Transaksi::with('username')->find($id);
        
        $transaksi->update([
            'id_transaksi'=>$request->id_transaksi,
            'tgl_trx'=>$request->tgl_trx,
            'id_user'=>$request->id_user,
            'total_bayar'=>$request->total_bayar,
            'bayar'=>$request->total_bayar
        ]);
        return redirect('/');
    }
}
    

