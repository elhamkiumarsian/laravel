
        @extends('layout1')
        @section('content')
        <h1>Welcome</h1>
        <a href="/card/{{$card->id}}">
			<h2>{{$card->title}}</h2>
		</a>

<ui>
	@foreach($card->notes as $note)
	<li><a href="/note/{{$note->id}}/edit">{{$note->body}}</li>
	@endforeach
</ui>
	<form action='/card/{{$card->id}}/notes' method='POST'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input name='body' >
		<button type='submit'>Add Note</button>
	</form>
   
        @stop

        
