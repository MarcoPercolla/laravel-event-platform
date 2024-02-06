@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Nuovo gioco</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
            @method('PUT')
            @csrf
            {{-- name description --}}
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') ?? $event->name}}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                    name="date" value="{{ old('date') ?? $event->date}}">
                @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="available_tickets" class="form-label">available_tickets</label>
                <input type="number" class="form-control @error('available_tickets') is-invalid @enderror" id="available_tickets" 
                name="available_tickets" value="{{ old('available_tickets') ?? $event->available_tickets }}">
                @error('available_tickets')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            

            <div class="mb-3">
                <label for="tags" class="form-label">seleziona i tag associati</label>
                <select multiple name="tags[]" id="tags" class="form-select">
                    {{-- @php 
                    $game_tag_ids = array_map(function($game_tag){
                        return $game_tag["id"];

                    },
                    $game->tags->toArray());
                    
                    @endphp --}}
                    @foreach ($tags as $tag)
                    
                        {{-- @if (in_array($tag->id, $game_tag_ids)) --}}
                        @if ($event->tags->contains($tag))
                            <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @else
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endif
                        
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
</div>
@endsection