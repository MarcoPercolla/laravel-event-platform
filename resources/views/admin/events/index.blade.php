@extends('layouts.admin')
@section('content')
    <div class="myContainer">
        
        @foreach ($events as $event)
        <div class="card">

           
            <h2>{{ $event->name }}</h2>
            <p>{{ $event->available_tickets }}</p>
            <p>{{ $event->date }}</p>
            <p>creato da:{{ $event->user->name }}</p>


            @if ($event->tags)
                @foreach ($event->tags as $tag)
                    <p class= {{$tag->color}}>{{ $tag->name }}</p>
                @endforeach
            @endif
            
            <a type="button" class="btn btn-primary" href="{{ route('admin.events.show', $event->id) }}">Show</a>
            <a type="button" class="btn btn-success" href="{{ route('admin.events.edit', $event->id) }}">Edit</a>
            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="elimina">
            </form>
        </div>    
        @endforeach
       
    </div>
@endsection

<style>
.blue {
background-color: #000dff;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}
.purple {
background-color: #9500ff;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}
.red {
background-color: #ff0000;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}
.green {
background-color: #00ff2f;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}
.orangered {
background-color: #ffaa00;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}
.grey {
background-color: #a2a3b1;
color: white;
width: 5rem;
text-align: center;
padding: 0.1rem;
border-radius: 0.4rem

}

.card{
    width: 30%;
    margin: 0.3rem auto;
}

.myContainer{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

a{
    text-decoration: none
}
</style>