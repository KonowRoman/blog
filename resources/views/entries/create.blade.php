@extends('base')

@section('title', 'Создание записи в блоге')

@section('content')

<h1>Создание записи в блоге</h1>
	{{ Form::model($entry, [
			'route' => 'entries.store',
		]) }}

			@include('entries.partials.fields')

		{{ Form::submit() }}

	{{ Form::close() }}
@endsection