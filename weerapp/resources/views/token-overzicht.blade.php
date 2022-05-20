<!doctype html>
<html lang="en">
	@include('header')
	@extends('body')

	@section('content')

		<h2>Token overzicht</h2>
        <h2>Section title</h2>
		<div class="table-responsive">
			<table class="table table-striped table-sm">
				<thead>
					<tr>
						<th>#</th>
						<th>Aangemaakt op</th>
						<th>Token</th>
						<th>Service contract</th>
                        <th></th>
					</tr>
				</thead>
				<tbody>
                    @foreach($tokens as $token)
					<tr>
						<td>{{$token->id}}</td>
                        <td>{{$token->created_at}}</td>
						<td>{{$token->token}}</td>
						<td>{{ ["Basis", "Standaard", "Premium"][$token->contract] }}</td>
                        <td><button class="btn-danger">Verwijderen</button></td>
					</tr>
                    @endforeach
				</tbody>
			</table>
	@endsection
</html>
