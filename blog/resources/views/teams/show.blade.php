
@extends('layout')
@section('header')
@endsection
@section('content')
    <p>Name: <strong>{{$teams->club}}</strong></p>


    <ul>
        @foreach($players as $player)
            <li><a href="{{route('players.show', $player->id)}}">{{$player->voornaam . " " . $player->achternaam}}</a></li>
        @endforeach
    </ul>

    <a href="{{route('teams.edit', $teams->id)}}" class="btn btn-warning">Edit Club</a>


    <form action="{{route('teams.destroy', $teams->id )}}" method="POST" class="row g-3">
        @csrf
        @method('DELETE')

        <div class="col-6" style="margin: 0.3% 0">
            <input type="submit" value="DELETE" class="btn btn-danger">
        </div>
    </form>


@endsection
@section('footer')
@endsection
