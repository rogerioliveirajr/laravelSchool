@extends('user.base')

@section('title', 'Create user')

@section('container')
	{{ var_dump($errors) }}
	
	<form action="/user/add" method="post">
		<h1>Create User</h1>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="name" placeholder="Name">
		<input type="email" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="password" name="password_confirmation" placeholder="Repeat Password">
		<input type="submit" value="Submit">
	</form>
@endsection