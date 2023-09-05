<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   public function barang(){
      $barang = Barang::all();
         return view('barang/index',compact(['barang']));
   }
   public function create(Request $request){
      $barang = Barang::all();
      return view('barang/tambah',compact(['barang']));
   }
   public function store(request $request){
      $barang = Barang::create([
         'id_kamera' => $request->id_kamera,
         'jenis_kamera' => $request->jenis_kamera,
         'harga_kamera' => $request->harga_kamera,
         'deskripsi' => $request->deskripsi,
         'stok' => $request->stok
      ]);
      echo $barang->id_kamera;
         return redirect('barang');
   }
   public function edit($id){
      $barang = Barang::find($id);
         return view('barang/edit',compact(['barang']));
   }
   public function update($id, request $request){
      $barang = Barang::find($id);
      $barang->update($request->except('_token','Edit'));
         return redirect('barang');
   }
   public function destroy($id){
      $barang = Barang::find($id);
      $barang->delete();
         return redirect('barang');
   }
}