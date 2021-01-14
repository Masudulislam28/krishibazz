<?php

namespace App\Http\Controllers\frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use  App\Models\Advertisement;

use App\Http\Controllers\Controller;

class wholesellerController extends Controller
{
    public function checkoutForm($id)
    {
        
        $ad = Advertisement::find($id);

        return view('Frontend.wholeseller.checkoutform',compact('ad'));
       
    }

    public function placeOrder(Request $request,$id)

    {
     
        $request->validate([
            'quantity'=>'required',
            'price'=>'required',
            'total_price'=>'required',
            'payment_method'=>'required',
            'transaction_fee'=>'required',
            'send_from'=>'required',
        ]);

         $advertise = Advertisement::find($id);
      
      $orders = new Order();

      $orders->quantity =$request->quantity;
      $orders->price =$request->price;
      $orders->total_price =$request->total_price;
      $orders->payment_method =$request->payment_method;
      $orders->transaction_fee =$request->transaction_fee;
      $orders->send_from =$request->send_from;

      $orders->buyer_id =auth()->user()->id;
      $orders->sells_id = $advertise->user_id;
      $orders->post_id = $id;
      
    
      $orders->save();

      return redirect()->back()->with('message','Order Placed Successfully');

    }


}
