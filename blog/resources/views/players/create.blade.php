@extends('layout')
@section('header')
@endsection
@section('content')
    <form action="{{route('players.store')}}" method="POST" class="row g-3" style="margin: 0.3% 0" >
        @csrf
        <div class="col-md-12">
            <label class="form-label">Firstname</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="col-md-12">
            <label class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="col-md-12">
            <label class="form-label">Select team</label>
            <select name="team_id" class="form-select form-select-lg col-md-12">
                @foreach($players as $player)
                    <option value="{{$player->team_id}}">{{$player->teams->club}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12" style="margin-top: 0.4%">
            <input type="submit" value="create new player" class="btn btn-primary">
        </div>
    </form>
@endsection
@section('footer')
@endsection
