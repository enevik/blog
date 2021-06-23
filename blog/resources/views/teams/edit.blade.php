@extends('layout')
@section('header')
@endsection
@section('content')
    <form action="{{ route('teams.update', $teams->id) }}" method="POST" class="row g-3" style="margin: 0 0.5%">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="" class="form-label">Enter new clubname</label>
            <input type="text" name="club" class="form-control">
        </div>

        <div class="col-12" style="margin: 0.4% 0">
            <input type="submit" value="edit" class="btn btn-warning">
        </div>
    </form>
@endsection
@section('footer')
@endsection
