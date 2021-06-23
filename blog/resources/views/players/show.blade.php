@extends('layout')
@section('header')
@endsection
@section('content')
    <p>name: <strong>{{$players->voornaam}} {{$players->achternaam}}</strong></p>
    <a href="{{route('teams.show', $players->teams->id)}}" class="btn btn-primary"> <strong>{{$players->teams->club}}</strong></a>

    <a href="{{route('players.edit', $players->id)}}" class="btn btn-warning">Edit player</a>

    <form action="{{route('players.destroy', $players->id )}}" method="POST" class="row g-3">
        @csrf
        @method('DELETE')

        <div class="col-6" style="margin: 0.3% 0">
            <input type="submit" value="DELETE" class="btn btn-danger">
        </div>
    </form>

@endsection
@section('footer')
@endsection
