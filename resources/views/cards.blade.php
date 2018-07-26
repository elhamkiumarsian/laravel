
        @extends('layout1')
        @section('content')
        <h1>Cards</h1>
   
<ui>
	@foreach($cards as $card)
	<li> <a href="/card/{{$card->id}}">{{$card->title}}</a></li>
	@endforeach
	
</ui>
   
        @stop

        
