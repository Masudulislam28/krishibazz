@extends('master')

@section('page')

<div class ="container">

<h2>Add Farmer</h2>
@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
@if(Session::has('message'))
    <div class="alert alert-success"> {{ Session::get('message') }}</div>
  @endif
  <!--Advertise Form -->
<form method="post"action="{{route('farmer.updatelist',$farmer->id)}}">
    @csrf
   

  <div class="form-group">
    <label for="Name">Farmer Name</label>
    <input type="text" required name="Name"class="form-control" value="{{$farmer->Name}}" id="Name" >
  </div>

  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" required name="Address"class="form-control" value="{{$farmer->Address}}" id="Address" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="Mobile_Num">Mobile_Num</label>
    <input type="number" required name="Mobile_Num"class="form-control" value="{{$farmer->Mobile_Num}}" id="Mobile_Num" aria-describedby="emailHelp" >
    
  <div class="form-group">
    <label for="Gender">Gender</label>

    <select name="Gender" id="Gender" class="form-control">
    <option value="">Choose...</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    
    </select>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection