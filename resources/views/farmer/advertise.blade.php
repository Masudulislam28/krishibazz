@extends('master')

@section('page')

<div class ="container">

<h2>Add Product</h2>
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
    <label for="crop_category">Crop Category</label>
    <select name="crop_category" id="crop_category" class="form-control">
    <option value="">Choose...</option>
    <option value="Grains">Grains</option>
    <option value="Vegetable">Vegetable</option>
    
    </select>
    
    
  </div>
  <div class="form-group">
    <label for="Crop_Name">Crop Name</label>
    <input type="text" required name="Crop_Name"class="form-control" id="Crop_Name" >
  </div>
  <div class="form-group">
    <label for="Quantity">Quantity</label>
    <input type="number" required name="Quantity"class="form-control" id="Quantity" aria-describedby="emailHelp" >
    
  </div>
  <div class="form-group">
    <label for="Price">Price</label>
    <input type="number" required name="Price"class="form-control" id="Price" aria-describedby="emailHelp" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection