@extends('layout.master')
@section('left-bar')
<p>Menu</p>
@stop
@section('container')

<div class="container">
  <!-- <h3>Homepage</h3>
  <p>This is our homepage</p> -->
  @foreach ($data as $key => $value)
  @if($key==0)
  <b>Ketua: {{$value->name}}</b>
  @else
  <h3>{{$value->name}}</h3>
  @endif
    <!-- <h3>{{$value->name}}</h3>
    <p>{{$value->motto}}</p>  
    <img src="{{asset($value->photo)}}" alt=""> -->
  @endforeach
</div>
@stop