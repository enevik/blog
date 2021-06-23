@extends('layout')
@section('header')
@endsection
@section('content')
    <ul class="list-group">
        @foreach($teams as $team)
            <li class="list-group-item list-group-item-light" style="margin: 0.1%">
                <a href="{{route('teams.show', $team->id )}}">{{$team->club}}</a>
            </li>
        @endforeach
    </ul>

    <div style="display: flex;justify-content: flex-end; margin: 1.1%">
        <a href="{{route('teams.create')}}" class="btn btn-primary">create new team</a>
    </div>
@endsection
@section('footer')
@endsection
