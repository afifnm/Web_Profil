@extends('layouts.header')

@section('content')
<div class="mycontainer">
	<div class="row">
		<div class="col-lg-12">

		<!-- Slider -->
			<div id="main-slider" class="main-slider flexslider">
				<ul class="slides">
					<li>
						@foreach ($slides as $slide)
							<img src="/slides/{{ $slide->gambar }}" width="600" height="350" alt="" />
							<div class="flex-caption">
								<h3>{{ $slide->judul }}</h3>
								<p>{{ $slide->deskripsi }}</p>
							</div>
						@endforeach
					</li>
				</ul>
			</div>
		<!-- End Slider -->

		</div>
	</div>
</div>

<div id="konten" class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
	<div id="konteninfo" class="col-lg-9">
		@foreach ($profil as $profil)
		<div  id="about">
			<h3 style="color: black;">{{ $profil->nama }}</span></h3>
			<p>{{ $profil->visi }}</p>
			<p>{{ $profil->misi }}</p>
			<p>{{ $profil->tujuan }}</p>
		</div>

		<a class="pull-right" href='tentangkami'>
			Selengkapnya...
		</a>
		@endforeach
	</div>
</div>

<br><hr class="colorgraph" />

<div id="informasi">
	<div class="col-lg-12">
		<div id="grid-container" class="cbp-l-grid-projects">
			<ul>
				<li class="cbp-item graphic">
					<div class="cbp-caption" style="margin-bottom:0px;">

					@foreach ($informasi as $info)
						<div class="cbp-caption-defaultWrap">
							<img class="img-responsive" src="/images/{{ $info->gambar }}" width="270" height="265" />
						</div>
						<div class="cbp-caption-activeWrap">
							<div class="cbp-l-caption-alignCenter">
								<div class="cbp-l-caption-body">
									<a class='cbp-l-caption-buttonRight' style='padding: 5px 15px 7px 11px;' href="informasi/{{ $info->id }}">Baca...</a>
								</div>
							</div>
						</div>
						<div style="text-align:center;" class="cbp-l-grid-projects-title">{{ $info->judul }}</div>
						<div class="cbp-l-grid-projects-desc"> {{ Str::words($info->deskripsi, 20 )}} </div>
					@endforeach

					</div>
				</li>
			<ul>
		</div>
	</div>
</div>
@stop

@section('scripts')
@include('views.layouts.viewjs')
@stop
