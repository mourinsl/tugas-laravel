@extends ('Admin.template.base')

@section('content')

<div class="container">
	<div class="row"> 
		<div class="col-md-12 mt-5">
			<div class="card">
				<div  class="card-header">
					<b>Detail Data User</b>
				</div>
					<div class="card-body">
						<h3>{{$user->nama}}</h3>
						<h5>No HP : {{$user->detail->no_hp}}</h5>
						<hr>
						<p>
							Username : {{$user->username}}
						</p>
						<p>
							Email : {{$user->email}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection