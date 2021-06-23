@extends('layout')
@section('header')
@endsection
@section('content')
    <form action="{{route('players.update', $player->id)}}" method="POST" class="row g-3" style="margin: 0 0.5%">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label class="form-label">Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="{{$player->voornaam}}">
        </div>
        <div class="col-md-12">
            <label class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="{{$player->achternaam}}">
        </div>
        <div class="col-md-12">
            <label class="form-label">Select team</label>
            <select name="team_id" class="form-select form-select-lg col-md-12">
                @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->club}}</option>
                @endforeach
            </select>
        </div>
        </select>
        <div class="col-md-12" style="display: flex;justify-content: flex-end;margin:.3% 0">
            <input type="submit" class="btn btn-primary" value="Edit player">
        </div>
    </form>
@endsection
@section('footer')
@endsection
