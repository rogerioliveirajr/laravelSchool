@extends('foo.base')

@section('title', 'Bar Page')

@section('container')
	<h1>Barzinho</h1>
	<ul>
	@foreach(['foo', 'bar', 'baz'] as $item)
		<li>{{ $item }}</li>
	@endforeach
	</ul>
@endsection