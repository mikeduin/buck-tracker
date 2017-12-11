@extends('layouts.master')

@section('content')
  <script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
  <div class="row">
    Register a user
  </div>
  <form class="" action="index.html" method="post">
    <div class="row">
      <div class="input-field col s6">
        <input type="text" name="hunter" value="">
        <label for="hunter">Your Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="number" name="phone" value="">
        <label for="phone">Ten-Digit ID (Phone #)</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="text" pattern="\d{1,2}/\d{1,2}" name="password" value="">
        <label for="password">Birthday (MMYY)</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <select name="party">
          <option disabled selected value="">Select a party</option>
          @foreach ($parties as $party)
            <option value="{{$party['name']}}">{{$party['name']}}</option>
          @endforeach
        </select>
        <label for="">Hunting Party</label>
      </div>
    </div>

    </div>
  </form>

@endsection
