@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Phone : {{ $teachers->phone }}</p>
        <p class="card-text">Age : {{ $teachers->age }}</p>
        <p class="card-text">Email : {{ $teachers->email }}</p>
        <a href="{{ url('/teachers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
  </div>

    </hr>

  </div>
</div>
@endsection
