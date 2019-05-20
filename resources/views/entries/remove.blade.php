@extends('base')

@section('title', 'Удаление записи в блоге')

@section('content')

<h1>Удаление записи в блоге</h1>
	{{ Form::model($entry, [
			'method' => 'DELETE',
			'route' => 'entries.destroy',
		]) }}

		{{ Form::submit() }}

	{{ Form::close() }}
@endsection