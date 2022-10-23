@extends('layouts.master')


@section('content')
    <div class="container">
        <a href="{{route('users.home')}}" class="btn btn-primary">Back</a>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{$user->name}}" disabled/>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="{{$user->email}}" disabled/>
        </div>
    </div>
@endsection