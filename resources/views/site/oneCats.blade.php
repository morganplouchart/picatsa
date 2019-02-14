@extends('layouts.picatsa')
	@section('content')
	<div class="colorlib-loader"></div>
	<div id="page">
		@include('layouts.menu')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{$Onecat->photo}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
									   <h1>{{$Onecat->nom}}</h1>
									   <h1>{{$Onecat->couleur}}</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
								
								<div class="col-md-12 col-sm-12 animate-box">
									<div class="tour">	
											<a href="{{route('cats', ['id' => $Onecat->id])}}" class="tour-entry animate-box">
												<div class="tour-img" style="background-image: url({{$Onecat->photo}});">
												</div>
												<span class="desc">
													<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
													<h2>{{$Onecat->nom}}</h2>
													<span class="city">{{$Onecat->couleur}}</span>
												</span>
											</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>

            
                </div>
            </div>
        </div>
    </div>
</div>
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection

