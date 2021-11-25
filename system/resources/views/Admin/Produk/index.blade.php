@extends ('Admin.template.base')

@section('content')

	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card card-header">
						FILTER PRODUK
					</div>
					<div class="card-body">
						<form action="{{url('Admin/produk/filter')}}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Min</label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Max</label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"> Filter</i></button>
					</form>
					</div>
					<div  class="card-header">
						<h2><b>Data Produk</b></h2>
						<a href="{{url('Admin/produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"><b> Tambah Data</b></i></a>
					</div>
					<div class="card-body">
						<table class="table table-datatable table-bordered table-striped">
						<thead>
							<th>No</th>
							<th>Aksi</th>
<<<<<<< HEAD
							<th>Nama Produk</th>
=======
							<th>Nama</th>
>>>>>>> parent of 143dd16 (Initial commit)
							<th>Harga</th>
							<th>Stok</th>
						</thead>
						<tbody style="text-align: center;">
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('Admin/produk', $produk->id)}}" class="btn btn-primary" style="width: 40px; border-radius: 5px;"><i class="fa fa-info"></i></a>
										<a href="{{url('Admin/produk', $produk->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
										@include('Admin.template.utils.delete', ['url'=>url('Admin/produk', $produk->id)])
									</div>
								</td>
								<td style="text-align: left;">{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
							</tr>
							@endforeach
						</tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>


@endsection