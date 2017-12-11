@extends('layouts.master')

@section('content')
  <div class="row">
    This is the party list
    @foreach ($parties as $party)
      <li>{{$party['name']}}</li>
    @endforeach
  </div>
@endsection
