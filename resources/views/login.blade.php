@extends('layout.master')
@section('container')
@if($errors->any())
<h2>{{$errors->first()}}</h2>
@endif  




<form action="{{url('authenticate')}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="name" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password"  >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop