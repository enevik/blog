@extends('layout')
@section('header')
@endsection
@section('content')
    <ul class="list-group">
        @foreach($players as $player)
            <li class="list-group-item list-group-item-light" style="margin: 0.1%">
                <a href="{{route('players.show', $player->id)}}">{{$player->voornaam . " " . $player->achternaam}}</a>
            </li>
        @endforeach
    </ul>

    <div style="display: flex;justify-content: flex-end; margin: 1.1%">
        <a href="{{route('players.create')}}" class="btn btn-primary">create new player</a>
    </div>
@endsection
@section('footer')
@endsection
