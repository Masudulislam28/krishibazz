@extends('frontend.master')
@section('content')

<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <div class="header"style="margin-top:50px">
        @if(Session::has('message'))
                             <div class="alert alert-success"> {{ Session::get('message') }}</div>
          @endif
        <h2 >

        My Transaction
        <span style="color:green ">{{$orders->count()}}</span>

        </h2>
        </div>
        <thead>
            <tr>
                <th>Sl</th>
                
                <th>Total Price(BDT)</th>
                <th>Payment Method</th>
                <th>Transaction fee(BDT)</th>
                <th>Send from</th>
                <th>Status</th>
                <th>Created At</th>
               
            
            
            </tr>
            <tbody>
                    @foreach($orders as $key=>$order)

                    <tr>
                         <td>{{ $key + 1}}</td>
                         <td>{{$order->total_price}} BDT</td>
                         <td>{{$order->payment_method}}</td>
                         <td>{{$order->transaction_fee}} BDT</td>
                         <td>{{$order->send_from}}</td>
                         <td>
                         
                         @if($order->is_approved ==  true)

                         <span  style="background-color:green;color:white">Approved</span>
                        @else

                        <span style="background-color:red;color:white">Pending</span>


                        @endif
                         
                         </td>

                         <td>{{$order->created_at}}</td>
                         

                 </tr>
                    @endforeach
           
            
            </tbody>
        
        
        
        </thead>

</table> 
</div>

</div>

@stop