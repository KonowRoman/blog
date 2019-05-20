<h1>Создание комментария</h1>

{{Form::model($message, ['route' => 'messages.store'])}}
{{Form::label('content')}}
{{Form::textarea('content')}}
{{Form::submit()}}
{{Form::close()}}