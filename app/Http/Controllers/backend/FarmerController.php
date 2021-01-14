<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Farmer;
use App\Models\trade_advertisement;
use Illuminate\Http\Request;

class FarmerController extends Controller
{   
    //new code 
     public function showForm()
     {
         return view('farmer.form');
     }

     public function storeForm(Request $request)
     {
        {  
            $request->validate([
               
                'Name'=>'required',
                'Address'=>'required',
                'Mobile_Num'=>'required',
                'Gender'=>'required',
            
            ]);
    
          $data = new Farmer();
          
          $data->Name =$request->Name;
          $data->Address =$request->Address;
          $data->Mobile_Num =$request->Mobile_Num;
          $data->Gender =$request->Gender;
          $data->save();
          return redirect()->back()->with('message','Farmer added sucessfully');
         }
     }


    Public function showList()
    {
        $list=Farmer::paginate(5);
        return view('farmer.list',compact('list'));

    }

    public function viewFarmer($id)
    { 
          
        return view('farmer.view',
        
        [
            'data'=> Farmer::findorFail($id)
            
        ]);


    }
        public function deleteFarmer($id)
        {
            $list=Farmer::find($id)->delete();
            return redirect()->back()->with('message','Farmer deleted sucessfully');

        }

        public function editList($id)
        {
            
            $farmer= Farmer::find($id);
        return view('farmer.updatefarmerlist',compact('farmer'));

        }
        public function UpdateList(Request $request,$id)
   {

       {  
           $request->validate([
               'Name'=>'required',
               'Address'=>'required',
               'Mobile_Num'=>'required',
               'Gender'=>'required',
           
           ]);
   
         $farmers = Farmer::find($id);
         $farmers->Name =$request->Name;
         $farmers->Address =$request->Address;
         $farmers->Mobile_Num =$request->Mobile_Num;
         $farmers->Gender =$request->Gender;
         $farmers->save();
         return redirect(route('farmer.list'))->with('message','Farmer Updated sucessfully');
        }
    }


    





     // end of new code

    public function postAdvertise()
    {
    
        return view('farmer.advertise');
       
    }

   // public function store(Request $request)
   public function store(Request $request)
   {

       {  
           $request->validate([
               'crop_category'=>'required',
               'Crop_Name'=>'required',
               'Quantity'=>'required',
               'Price'=>'required',
           
           ]);
           
         $products = new trade_advertisement();
         $products->crop_category =$request->crop_category;
         $products->Crop_Name =$request->Crop_Name;
         $products->Quantity =$request->Quantity;
         $products->Price =$request->Price;
         $products->save();
         return redirect()->back()->with('message','Product added sucessfully');
        }
    }
    //wholeseller view_advertise
    public function view_advertise()
    {
        $list= trade_advertisement::paginate(5);
        return view('farmer.advertiselist',compact('list'));
    }
    public function view_product($id)
        {
            return view('farmer.view_product',
            
            [
                'product'=> trade_advertisement::findorFail($id)
            ]);
            
        }
        public function delete_product($id)
        {
            $list=trade_advertisement::find($id)->delete();
            return redirect()->back();

        }
        
        public function edit_product($id)
        {
            
            $product= trade_advertisement::find($id);
        return view('farmer.update_advertise',compact('product'));

        }
        public function update_product(Request $request,$id)
   {

       {  
           $request->validate([
               'crop_category'=>'required',
               'Crop_Name'=>'required',
               'Quantity'=>'required',
               'Price'=>'required',
           
           ]);
   
         $products = trade_advertisement::find($id);
         $products->crop_category =$request->crop_category;
         $products->Crop_Name =$request->Crop_Name;
         $products->Quantity =$request->Quantity;
         $products->Price =$request->Price;
         $products->save();
         return redirect(route('wholeseller.view_advertise'))->with('message','Product Updated sucessfully');
        }
    }

 


}


