@extends('layouts.picatsa')
	@section('content')
	<div class="colorlib-loader"></div>
	<div id="page">
                <div class="colorlib-wrap">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-6">
                                                <h1>Create Cats</h1>
                                                @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                                <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                        @endforeach
                                                                </ul>
                                                        </div>
                                                @endif
                                                <form method="POST" action="/admin/cats">
                                                        @csrf
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">nom</label>
                                                                <input type="text" class="form-control" name="nom" placeholder="nom">
        
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">couleur</label>
                                                                <input type="text" class="form-control" name="couleur" placeholder="couleur">
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Photo</label>
                                                                <input type="text" class="form-control" name="photo" placeholder="URL de votre photo ex: http://photo.com/photo.jpg">     
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Description</label>
                                                                <textarea type="text" class="form-control" name="description" placeholder="décription"> </textarea>    
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" style="margin-top:20px;">Enregister</button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
@endsection


