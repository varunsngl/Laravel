@extends('theme')


@section('content')
	<h1>Hello I'm an about Page</h1>
	<p>about page for testing</p>

	@foreach ($names as $name)
	<ul>
		<li>
			{{ $name }}
		</li>
	</ul>
	@endforeach

@endsection