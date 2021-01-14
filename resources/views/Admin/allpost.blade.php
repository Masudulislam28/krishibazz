@extends('master')
@section('page')

<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <div class="header"style="margin-top:50px">
        @if(Session::has('message'))
                             <div class="alert alert-success"> {{ Session::get('message') }}</div>
          @endif
        <h2 >

        All Advertise post
        <span style="color:green ">{{$advertises->count()}}</span>

        </h2>
        </div>
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Contact no</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Quantity(KG)</th>
                <th>Price(BDT PER KG)</th>
                <th>Details</th>
              
                <th>Image</th>
                
                <th>Action</th>
                
            
            
            </tr>
            <tbody>
          
                    @foreach($advertises as $key=>$advertise)
                    
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$advertise->name}}</td>
                    <td>{{$advertise->contact_no}}</td>
                    <td>{{$advertise->category}}</td>
                    <td>{{$advertise->product_name}}</td>
                    <td>{{$advertise->quantity}}</td>
                    <td>{{$advertise->price}}</td>
                    <td>{{$advertise->details}}</td>
                    <td>
                    <img width="65" height="65" src="{{asset('uploads/'.$advertise->image)}}" alt="">
                    
                    </td>
                  
                    
                   
                    <td>
                    
                    
                    <a href="{{route('allrpost.delete',$advertise->id)}}" class="btn btn-danger">Delete</a>
                    
                    
                    </td>
                    
                    
                    </tr>


                    @endforeach




           
            
            </tbody>
        
        
        
        </thead>

</table> 
</div>

</div>

@stop