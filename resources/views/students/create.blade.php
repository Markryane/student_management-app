@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <input type="hidden" name="actions" value="actions" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
