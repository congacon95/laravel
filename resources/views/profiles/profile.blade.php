@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            {{$user->name}}'s profile.
          </div>
          <div class="panel-body">
            <img src="{{ Storage::url($user->avatar) }}" with="50px" heght='50px' style='border-radius: 50%;' alt="avatar" >
          </div>
        </div> 
      </div>
    </div>
@endsection