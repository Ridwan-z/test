@extends('template.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Kamera</label>
	<input class="form-control" type="text" value="{{$barang->id_kamera}}" name="id_kamera" placeholder="Id Kamera">
	</div>
	<div class="form-group">
		<label>Jenis Kamera</label>
	<input class="form-control" type="text" value="{{$barang->jenis_kamera}}" name="jenis_kamera" placeholder="jenis_kamera">
	</div>
	<div class="form-group">
		<label>Harga Kamera</label>
	<input class="form-control" type="text" value="{{$barang->harga_kamera}}" name="harga_kamera" placeholder="harga_kamera">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
	<input class="form-control" type="text" value="{{$barang->deskripsi}}" name="deskripsi" placeholder="Deskripsi">
	</div>
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" value="{{$barang->stok}}" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection