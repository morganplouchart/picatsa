@extends('layouts.picatsa')
	@section('content')
	<div class="colorlib-loader"></div>
	<div id="page">
                <div class="colorlib-wrap">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-6">
                                        <h1>Modifier le chat {{$cats->nom}}</h1>
                                                <form method="POST" action="/admin/cats/{{$cats->id}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">nom</label>
                                                        <input type="text" class="form-control" name="nom" placeholder="nom" value="{{$cats->nom}}">
        
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">couleur</label>
                                                                <input type="text" class="form-control" name="couleur" placeholder="couleur" value="{{$cats->couleur}}">
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Photo</label>
                                                                <input type="text" class="form-control" name="photo" placeholder="URL de votre photo ex: http://photo.com/photo.jpg" value="{{$cats->photo}}">     
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Description</label>
                                                                <textarea type="text" class="form-control" name="description" placeholder="décription">{{$cats->description}}</textarea>    
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" style="margin-top:20px;">Modifier</button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
@endsection


