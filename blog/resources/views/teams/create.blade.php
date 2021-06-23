@extends('layout')
@section('header')
@endsection
@section('content')
    <form action="{{ route('teams.store') }}" method="POST" class="row g-3" style="margin: 0.5%">
        @csrf
        <div class="col-md-6">
            <label class="form-label">Clubname</label>
            <input type="text" name="club" class="form-control">
        </div>
        <div class="col-12" style="margin-top: 0.4%">
            <input type="submit" value="maken" class="btn btn-primary">
        </div>
    </form>
@endsection
@section('footer')
@endsection
