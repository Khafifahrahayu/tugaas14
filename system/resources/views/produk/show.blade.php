@extends ('template.base')

@section ('content')

<div class="Container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Produk
				</div>
				<div class="card-body">
					<h3>{{$produk->nama}}</h3>
					<hr>
					{{--@include('produk.show.detail')--}}
					<p>
						{!! nl2br($produk->deskripsi) !!}
					</p>
					<p>
						<img width ="300" src="{{url("public/$produk->foto")}}" alt="" >
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

				


@endsection