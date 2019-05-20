<h1>Список комментариев</h1>
<table border="1">
<tr>	
<td>Код</td>
<td>Описание</td>
<td>Время создания</td>
</tr>
@foreach($messages as $message)
<tr>
<td>{{$message->id}}</td>
<td>{{$message->content}}</td>
<td>{{$message->created_at}}</td>
</tr>
@endforeach
</table>