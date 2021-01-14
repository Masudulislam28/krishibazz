@extends('master')

@section('page')

<div class ="container">

<h2>Add Wholeseller</h2>
@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
@if(Session::has('message'))
    <div class="alert alert-success"> {{ Session::get('message') }}</div>
  @endif
  <!--Advertise Form -->
<form method="post"action="#">
    @csrf
   

  <div class="form-group">
    <label for="name">Wholeseller Name</label>
    <input type="text" required name="name"class="form-control" id="name" >
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" required name="address"class="form-control" id="address" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="mobile_Num">Mobile_Num</label>
    <input type="number" required name="mobile_Num"class="form-control" id="mobile_Num" aria-describedby="emailHelp" >
    
  <div class="form-group">
    <label for="Gender">Gender</label>

    <select name="gender" id="gender" class="form-control">
    <option value="">Choose...</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
    </select>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection