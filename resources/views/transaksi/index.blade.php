@extends('template.layout')

@section('content')
<div class="container">
<div class="card">
	<div class="card-header">
		<h3 class="card-tittle">DataTable with default features</h3>
	</div>
	<a href="barang/tambah" class="btn btn-inf">Tambah</a>
</div>
<div class="card-body">
	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Id Transaksi</th>
				<th>Id Kamera</th>
				<th>Lama Sewa</th>
				<th>Total Harga</th>
				<th>Total Bayar</th>
			</tr>
		</thead>
		@foreach($transaksi as $b)
		<tbody>
			<tr>
				<td>{{ $b->id_transaksi }}</td>
				<td>{{ $b->id_kamera }}</td>
				<td>{{ $b->lama_sewa }}</td>
				<td>{{ $b->total_harga }}</td>
				<td>{{ $b->total_bayar }}</td>
				<td>
					<a href="/transaksi/edit/{{ $b->id_transaksi }}"class="btn btn-warning">Edit</a>
					<a href="/transaksi/hapus/{{ $b->id_transaksi }}"class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</div>

</div>
</div>
@endsection
