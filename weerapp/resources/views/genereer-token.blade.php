<!doctype html>
<html lang="en">
	@include('header')
	@extends('body')

	@section('content')

		<h2>Genereer token</h2>
		<form method="post" action="/genereer-token">
			@csrf
			@if (\Session::has('success'))
				<div class="alert alert-success">
					<ul>
						<li>{!! \Session::get('success') !!}</li>
					</ul>
				</div>
			@endif
			<div class="form-group row">
				<label for="text1" class="col-4 col-form-label">Service contract type</label> 
				<div class="col-8">
                    <select name="contract" class="form-control">
<option value="basic">Basis</option>
<option value="standard">Standaard</option>
<option value="premium">Premium</option>
</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-4 col-8">
					<button name="submit" type="submit" class="btn btn-primary">Nieuwe token genereren</button>
				</div>
			</div>
		</form>
	@endsection
</html>
