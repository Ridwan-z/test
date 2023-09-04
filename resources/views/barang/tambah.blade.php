@extends('template.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Validation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data <small>Barang</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form method="POST" action="/barang/store">
	@csrf                
	<div class="card-body">
                  <div class="form-group">
                  <label>Id Kamera</label>
                    <input type="text"name="id_kamera" placeholder="Id Kamera" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                  	<label>Jenis Kamera</label>
                    <input type="text" name="jenis_kamera" placeholder="Jenis" class="form-control">
                  </div>
                   <div class="form-group">
                  <label>Harga Kamera</label>
                    <input type="text" name="harga_kamera" placeholder="Harga_Kamera" class="form-control">
                  </div>
                   <div class="form-group">
                  <label>Deskripsi</label>
                    <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control">
                  </div>
                   <div class="form-group">
                  	<label>Stok</label>
                    <input type="text" name="stok" placeholder="Stok" class="form-control">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection