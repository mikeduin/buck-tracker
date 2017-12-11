@extends('layouts.master')

@section('content')
  <div class="row">
    Create your hunting party!
  </div>
  <form action="newParty" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    <div class="row">
      <div class="input-field col s6">
        <input type="text" name="party_name" value="" class="validate">
        <label for="party_name">Party Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="text" name="city" class="validate">
        <label for="city">City</label>
      </div>
    </div>
    <div class="row">
      <div class="col s4">
        <input type="submit" class="btn" name="" value="Create party">
      </div>
    </div>
  </form>
@endsection
