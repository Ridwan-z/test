 @extends('template.layout')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
             

            <div class="card">
              <div class="card-header">
				<a href="barang/tambah" class="btn btn-primary">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>Id Kamera</th>
				<th>Jenis kamera</th>
				<th>Harga kamera</th>
				<th>Deskripsi</th>
				<th>Stok</th>
                  </tr>
                  </thead>
                 @foreach($barang as $b)
		<tbody>
			<tr>
				<td>{{ $b->id_kamera }}</td>
				<td>{{ $b->jenis_kamera }}</td>
				<td>{{ $b->harga_kamera }}</td>
				<td>{{ $b->deskripsi }}</td>
				<td>{{ $b->stok }}</td>
				<td>
					<a href="/barang/edit/{{ $b->id_kamera }}"class="btn btn-warning">Edit</a>
					<a href="/barang/hapus/{{ $b->id_kamera }}"class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
		@endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
  @endsection