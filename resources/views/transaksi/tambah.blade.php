@extends('template.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Id Kamera</label>
	<input class="form-control" type="text" name="id_barang" placeholder="Id Kamera">
	</div>
	<div class="form-group">
		<label>Jenis Kamera</label>
	<input class="form-control" type="text" name="id_kategori" placeholder="jenis kamera">
	</div>
	<div class="form-group">
		<label>Harga Kamera</label>
	<input class="form-control" type="text" name="nama" placeholder="Harga Kamera">
	</div>
	<div class="form-group">
		<label>Gambar</label>
	<input class="form-control" type="text" name="harga" placeholder="Gambar">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
	<input class="form-control" type="text" name="stok" placeholder="Deskripsi">
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection@extends('template.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Id Kamera</label>
	<input class="form-control" type="text" name="id_kamera" placeholder="Id Kamera">
	</div>
	<div class="form-group">
		<label>Jenis Kamera</label>
	<input class="form-control" type="text" name="jenis_kamera" placeholder="jenis_Kamera">
	</div>
	<div class="form-group">
		<label>Harga Kamera</label>
	<input class="form-control" type="text" name="harga_kamera" placeholder="Harga_Kamera">
	</div>
	<div class="form-group">
		<label>Gambar</label>
	<input class="form-control" type="text" name="gambar" placeholder="Gambar">
	<div class="form-group">
		<label>Deskripsi</label>
	<input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi">
	</div>
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection