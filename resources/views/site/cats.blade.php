@extends('layouts.picatsa')
	@section('content')
	<div class="colorlib-loader"></div>
	<div id="page">
			@include('layouts.menu')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li>
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
						   @foreach ($cats as $cat)
							   
						 
						   <div class="row" style=" background:black;">
								@endforeach
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
										 <h1 style="margin-left:-150px;">Welcome in the home of Cats</h1>
															<form action="/search" method="GET" class="card card-sm">
																	<div class="card-body row no-gutters align-items-center">
																			<div class="col-auto">
																					<i class="fas fa-search h4 text-body"></i>
																			</div>
																			<!--end of col-->
																			<div class="col-md-10">
																					<input class="form-control form-control-lg form-control-borderless" style="background:white;" type="search" name="search" placeholder="Chercher un chat avec son nom">
																			</div>
																			<!--end of col-->
																			<div class="col-auto">
																					<button class="btn btn-lg btn-success" type="submit">Search</button>
																			</div>
																			<!--end of col-->
																	</div>
															</form>
													<!--end of col-->
										</div>
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
					<div class="col-md-12">
						<div class="row">
							<div class="wrap-division">
								@foreach ($cats as $cat)
								<div class="col-md-3 col-sm-6 animate-box">
									<div class="tour">	
											<a href="{{route('cats', ['id' => $cat->id])}}" class="tour-entry animate-box">
												<div class="tour-img" style="background-image: url({{$cat->photo}});">
												</div>
												<span class="desc">
													<h2>{{$cat->nom}}</h2>
													<span class="price">color : {{$cat->couleur}}</span>
													<span style="color:black; padding:20px;">{{$cat->description}}</span>
												</span>
											</a>
											<div style="display:flex;">
											@auth
											<button style="margin-right:10px; background:black; padding:10px;border:none; "><a href="/admin/cats/{{$cat->id}}/edit">Modifier</a></button>
											<form action="/admin/cats/{{$cat->id}}" method="POST">
													@method('DELETE')
													@csrf
													<button style="margin-right:10px; background:red; padding:10px; color:white; border:none;">Supprimer</button>
											</form>
											@endauth
										</div>
									</div>
								</div>
								@endforeach	
							</div>
						</div>
				
					</div>
				</div>
			</div>
	
		<div id="colorlib-subscribe" style="background-image: url({{$cat->photo}});" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection

