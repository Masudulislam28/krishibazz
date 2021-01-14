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

        All Transaction
        <span style="color:green ">{{$orders->count()}}</span>

        </h2>
        </div>
        <thead>
            <tr>
                <th>Sl</th>
                <th>Farmer ID</th>
                <th>Wholeseller ID</th>
                <th>Post ID</th>
                <th>Quantity(KG)</th>
                <th>Price(BDT PER KG)</th>
                <th>Total Price (BDT)</th>
                <th>Payment Method</th>
                <th>Transaction fee (BDT)</th>
                <th>Send from</th>
                <th>Action</th>
            
            
            </tr>
            <tbody>
          
                    @foreach($orders as $key=>$order)
                        
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$order->sells_id}}</td>
                    <td>{{$order->buyer_id}}</td>
                    <td>{{$order->post_id}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->total_price}}</td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->transaction_fee}}</td>
                    <td>{{$order->send_from}}</td>
                    <td>
                    
                    
                    <a href="{{route('transaction.delete',$order->id)}}" class="btn btn-danger">Delete</a>
                    
                    
                    </td>
                    
                    
                    </tr>


                    @endforeach




           
            
            </tbody>
        
        
        
        </thead>

</table> 
</div>

</div>

@stop