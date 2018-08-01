
        @extends('layout1')
        @section('content')
        <h1>notes</h1>
   
<ui>
	<form action='/note/{{$note->id}}/update' method='POST'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{{ method_field('PATCH')}}

		<input name='body' value={{$note->body}}>
		<div>
		
			<h4>Tags</h4>
				@foreach($note->tags as $tag)
				<li>{{$tag->name}}</li>
				@endforeach
		</div>
		<button type='submit'>update Note</button>
	</form>
	
</ui>
   
        @stop

        
