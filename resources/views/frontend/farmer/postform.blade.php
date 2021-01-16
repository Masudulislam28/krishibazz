@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>



</body>
</html>

@if ($errors->any())
    <div>
        
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        
    </div>
@endif


<form method="post" action="{{route('farmer.post')}}"enctype="multipart/form-data">
@if(session()->has('message'))

<p class= "alert alert-success">{{session()->get('message')}}</p>

@endif
<div class="header"style="margin-top:50px">
<h2>Post Trade Advertisement</h2>
</div>

@csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input name="name"  placeholder=" fill up name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
 
  <div class="form-group">
    <label for="contact_no">Contact No</label>
    <input name="contact_no"  placeholder=" fill up contact no" type="number" class="form-control" id="contact_no" aria-describedby="emailHelp">
 </div> 

 

  <div class="form-group">
    <label for="category">Category</label>
 <input   name="category"  placeholder=" Select category" type="text" class="form-control" id="category" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input name="product_name"  placeholder="Enter Product name" type="text" class="form-control" id="product_name" aria-describedby="emailHelp">
   
  </div>   

 <div class="form-group">
    <label for="quantity">Quantity(KG)</label>
    <input name="quantity" placeholder="Enter total Quantity in kg" type="number" cols="30" rows="5" class="form-control" id="quantity" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="price">Price(BDT PER KG)</label>
    <input name="price" min="0" oninput="validity.valid||(value='');" placeholder="Price per kg" type="number" cols="30" rows="5" class="form-control" id="price" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="image">Select Image</label>
    <input name="image" type="file" cols="30" rows="5" class="form-control" id="image" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="details">Details</label>
    <textarea name="details" placeholder="Add details" type="text" cols="30" rows="5" class="form-control" id="details" aria-describedby="emailHelp"></textarea>
   </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>

@stop