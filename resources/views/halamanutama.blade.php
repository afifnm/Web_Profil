@extends('layouts.tampilan')

@section('content')
<!-- start slider -->
<section id="featured" class="bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/flexslider/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Modern Design</h3> 
					<p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/flexslider/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Fully Responsive</h3> 
					<p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/flexslider/3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Clean & Fast</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
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
				<h3>Single right sidebar page title</h3>
				<img src="img/dummies/dummy-1200.jpg" alt="" class="img-responsive" />
	
		
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
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<li>
						<img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>
				</aside>
			</div>
			
		</div>


	</div>
</section>

@endsection