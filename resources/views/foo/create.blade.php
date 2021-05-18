@extends('user.base')

@section('title', 'Create user')

@section('container')
	<form action="/user/add" method="post">
		<input type="text" name="name" placeholder="Name">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" value="Submit">
	</form>
@endsection