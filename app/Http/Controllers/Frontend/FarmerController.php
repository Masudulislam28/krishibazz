<?php

namespace App\Http\Controllers\Frontend;
use Str;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Order;


use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;


class FarmerController extends Controller


{
    public function postadvertise()
    {
    return view('frontend.farmer.postform');
    }

    public function storeadvertise(Request $request)
    {
      
        $request->validate([
            'name'=>'required',
            'contact_no'=>'required',
            'category'=>'required',
            'product_name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'details'=>'required',
            'image'=>'required'

        ]);
        
        $image =$request->file('image');
        $slug = Str::slug($request->title);
        

        if($request->hasFile('image'))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $currentDate . '-'. uniqid() . '.' .$image->getClientOriginalExtension();

            $image->storeAs('uploads',$imagename);

           

        }
        else
        {
            $imagename ='default.png';

        }

      $products = new Advertisement();
      $products->name =$request->name;
      $products->contact_no =$request->contact_no;
      $products->category =$request->category;
      $products->product_name =$request->product_name;
      $products->quantity =$request->quantity;
      $products->price =$request->price;
      $products->details =$request->details;
      $products->slug =$slug;
      $products->image =   $imagename; 
      $products->user_id = auth()->user()->id;
      $products->save();
      return redirect()->back()->with('message','Advertisement posted sucessfully');
     }

     public function viewadvertise()

     { 
         $posts=Advertisement::paginate(10);
         return view('farmer.createadvertise',compact('posts'));
     }

     public function viewDetails($id)

     {
        $product= Advertisement::find($id);
       
        return view('frontend.advertiseview',compact('product'));

     }
      
     public function myPost()

     {
         $id=auth()->user()->id;
        
        $post= Advertisement::where('user_id',$id)->orderby('id','desc')->get();
        //dd($post);
        return view('frontend.mypost',compact('post'));

     }

     public function myPostdelete($id)

     {
       
      $post=Advertisement::find($id);
        
      $post->delete();

    
      return redirect()->back()->with('msg','Post deleted successfully');

     }

     public function viewsellrequest()
     {
        $orders= Order::where('sells_id',auth()->user()->id)->get();

         return view ('frontend.farmer.viewsellrequest',compact('orders'));
     }

     public function approverequest($id)
     {

        $order = Order::find($id);

        if($order->is_approved == false)
        {
            $order->is_approved = true;
            $order->save();

            return redirect()->back()->with('message','Order successfully approved');

        }
        else
        {

            return redirect()->back()->with('message','Order already approved');
        }

     }

     public function rejectrequest($id)
     {
        Order::find($id)->delete();
        return redirect()->back()->with('message','Order rejected successfully');    

     }

   
    
    
}

