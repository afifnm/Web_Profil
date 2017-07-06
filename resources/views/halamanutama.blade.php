@extends('layouts.atasbawah')

@section('content')
<!-- start slider -->
<section id="featured" class="bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
            @foreach($slides as $slide)
              <li>
                <img src="{{ $slide->gambar }}" alt="" />
                <div class="flex-caption">
                    <h3>{{ $slide->judul }}</h3> 
					<p>{{ $slide->deskripsi }}}</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
            @endforeach
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
</section>
	
<section id="content">
	<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="text-center">
				<h2>Nama Sekolah</h2>					
				<p>Lorem ipsum dolor sit amet, ne duis posse mei, ut cum vero nominati. Sed graece aeterno consectetuer te. Cu duo tota deleniti, vis ea fuisset nostrum. Meliore inciderint qui ne. Suas cotidieque vel ut  ei eros perpetua qui. Ponderum lobortis reformidans</p>
			</div>
		</div>		
	</div>
	</div>
	
	<!-- divider -->
	<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="blankline">
			</div>
		</div>
	</div>
	</div>
	<!-- end divider -->
	
	<!-- parallax  -->
	<div id="parallax1" class="parallax text-light text-center marginbot50" data-stellar-background-ratio="0.5">	
       	<div class="container">
			<h1 style="margin:0 auto; color:#fff;">WE'RE NOT THE FIRST, BUT WE WORK HARDER THAN OTHERS</h1>	
       	</div>
	</div>

	<!-- blog posts -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				@foreach($informasi as $informasi)
				<img src="{{ $informasi->gambar }}" class="pull-left" alt="" />
				<h6><a href="#">{{ $informasi->judul }}</a></h6>
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
						<li><i class="fa fa-facebook"></i>{{ $profil->facebook }}</a></li>
						<li><i class="fa fa-twitter"></i>{{ $profil->instagram }}</li>
						<li><i class="fa fa-google-plus"></i>{{ $profil->wa }}</li>
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