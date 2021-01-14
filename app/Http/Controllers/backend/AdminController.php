<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Order;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function allregistered()
    {


        $users = User::all();

        //dd($users->all());

        
        //dd($advertises);

       
       // dd($orders->all());
 
     return view('Admin.allregistered',compact('users'));
       
 
    }

    public function allregistereddelete($id)

    {

        User::find($id)->delete();
      
        return redirect()->back()->with('message','User deleted successfully');
    }

    public function viewallpost()
    {

        $advertises =Advertisement::all();

       // dd($advertises->all());

        return view('Admin.allpost',compact('advertises'));
    }
    
    public function allpostdelete($id)
    {

        Advertisement::find($id)->delete();

        return redirect()->back()->with('message','Post deleted successfully');

    }

    public function managetransaction()
    {

        $orders  = Order::all();

         //dd($orders->all());
 
         return view('Admin.alltransaction',compact('orders'));

    }

    public function transactiondelete($id)
    {
        Order::find($id)->delete();

        return redirect()->back()->with('message','Transaction deleted successfully');

    }


}
