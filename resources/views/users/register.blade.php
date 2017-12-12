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
        <input type="tel" name="phone" value="">
        <label for="phone">Ten-Digit ID (Phone #)</label>
      </div>
    </div>
    <div class="row">
      <div class="col s6">
        <div class="input-field inline col s1">
          <input type="text" placeholder="MM" name="bday_mm" value="">
          {{-- <label for="bday_mm">Birthday (MMYY)</label> --}}
        </div>
        {{-- <div class="col s1 inline">
          /
        </div> --}}
        <div class="input-field inline col s1">
          <input type="text" placeholder="YY" name="bday_yy" value="">
          {{-- <label for="bday_yy">Birthday (MMYY)</label> --}}
        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="input-field col s6">
        <select name="party">
          <option disabled selected value="">Select a party</option>
          @foreach ($parties as $party)
            <option value="{{$party['name']}}">{{$party['name']}}</option>
          @endforeach
        </select>
        <label for="">Hunting Party</label>
      </div>
    </div> --}}
  </form>
@endsection
