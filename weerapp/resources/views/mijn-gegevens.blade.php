<!doctype html>
<html lang="en">
	@include('header')
	@extends('body')

	@section('content')

		<h2>Mijn gegevens</h2>
		<form method="post" action="/mijn-gegevens-opslaan">
			@csrf
			@if (\Session::has('success'))
				<div class="alert alert-success">
					<ul>
						<li>{!! \Session::get('success') !!}</li>
					</ul>
				</div>
			@endif
			<div class="form-group row">
				<label for="text1" class="col-4 col-form-label">Gebruikersnaam</label> 
				<div class="col-8">
					<input id="text1" name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
				</div>
			</div>
			<div class="form-group row">
				<label for="text1" class="col-4 col-form-label">E-mailadres</label> 
				<div class="col-8">
					<input id="text1" name="email" type="text" class="form-control" disabled value="{{ Auth::user()->email }}">
				</div>
			</div> 
			<div class="form-group row">
				<label for="text" class="col-4 col-form-label">Wachtwoord</label> 
				<div class="col-8">
					<input id="text" name="password" type="password" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-4 col-8">
					<button name="submit" type="submit" class="btn btn-primary">Opslaan</button>
				</div>
			</div>
		</form>
	@endsection
</html>
