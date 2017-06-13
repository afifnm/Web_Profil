@extends('layouts.atasbawah')

@section('content')
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Tentang Kami</h3>
				<img src="img/dummies/dummy-1200.jpg" alt="" class="img-responsive" />
	
				<p>
					{{$profil['tujuan']}}
				</p>
		
			</div>

		<div class="col-lg-12">
				<h3>Visi Misi</h3>
				<br>
				<h4>Visi</h4>
				<p>
					{{$profil['visi']}}
				</p>
				<h4>Misi</h4>
				<p>
					{{$profil['misi']}}
				</p>
			</div>
		</div>
	</div>
</section>
@endsection