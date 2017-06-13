@extends('layouts.atasbawah')

@section('content')
<section id="content">

	<!-- blog posts -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			@foreach($informasi as $informasi)
				<h3>{{ $informasi->judul }}</h3>
				<img src="{{ $informasi->gambar }}" alt="" class="img-responsive" />
				<p>{{ $informasi->deskripsi }}</p>
			@endforeach
	
		
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form role="form">
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Search..">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5>Media sosial</h5>
					<!-- iki gawe medsos e -->
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Pos terkini</h5>
					<ul class="recent">
					@foreach($informasi as $informasi)
						<li>
						<img src="{{ $informasi->gambar }}" class="pull-left" alt="" />
						<h6><a href="#">{{ $informasi->judul }}</a></h6>
						<p>
							 {{ $informasi->deskripsi }}
						</p>
						</li>
					@endforeach
					</ul>
				</div>
				</aside>
			</div>
			
		</div>


	</div>
</section>
@endsection