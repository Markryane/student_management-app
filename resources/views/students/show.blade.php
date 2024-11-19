@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
        <a href="{{ url('/students') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
  </div>

    </hr>

  </div>
</div>
@endsection
