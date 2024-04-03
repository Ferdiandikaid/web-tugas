@extends('layout.master')
@section('container')

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset($data->photo)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$data->name}}</h5>
    <p class="card-text">{{$data->motto}}</p>
  </div>

<!-- <div class="container">
<h3>{{$data->name}}</h3>
<p>{{$data->motto}}</p> 
<img src="{{asset($data->photo)}}" alt="inifoto"> -->
<!-- <a href="{{url('welcome')}}">TEST</a>
</div> -->
@stop