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

        All Registered user
        <span style="color:green ">{{$orders->count()}}</span>

        </h2>
        </div>
        <thead>
            <tr>
                <th>Sl</th>
                <th>Farmer ID</th>
                <th>Wholeseller ID</th>
                <th>Post ID</th>
                <th>My profit</th>
              
                
            
            
            </tr>
            <tbody>
          
                    @foreach($orders as $key=>$order)
                        
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$order->sells_id}}</td>
                    <td>{{$order->buyer_id}}</td>
                    <td>{{$order->post_id}}</td>
                    <td>{{$order->transaction_fee}} BDT</td>
                  
                  
                    
                    
                    </tr>


                    @endforeach




           
            
            </tbody>
        
        
        
        </thead>

</table> 
</div>

</div>

@stop