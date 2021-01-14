<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Wholeseller;


use Illuminate\Http\Request;

class WholesellerController extends Controller
{
    public function showForm()
    {
        return view('wholeseller.form');
    }

    public function storeForm(Request $request)
     {
        {  
            $request->validate([
               
                'name'=>'required',
                'address'=>'required',
                'mobile_Num'=>'required',
                'gender'=>'required',
            
            ]);
    
          $data = new Wholeseller();
          
          $data->name =$request->name;
          $data->address =$request->address;
          $data->mobile_Num =$request->mobile_Num;
          $data->gender =$request->gender;
          $data->save();
          return redirect()->back()->with('message','Wholeseller added sucessfully');
         }

     }
     Public function showList()
    {
        $list=Wholeseller::paginate(5);
        return view('wholeseller.list',compact('list'));

    }

    public function viewWholeseller($id)
    {
        return view('wholeseller.view',
        
        [
            'data'=> Wholeseller::findorFail($id)
        ]);

    }
    
    public function deletewholeseller($id)
    {
        $list=Wholeseller::find($id)->delete();
        return redirect()->back()->with('message','Wholeseller deleted sucessfully');
    }

    public function editList($id)
        {
           
            $wholeseller= Wholeseller::find($id);
        return view('wholeseller.updatewholesellerlist',compact('wholeseller'));

        }
        public function UpdateList(Request $request,$id)
   {

       {  
           $request->validate([
               'name'=>'required',
               'address'=>'required',
               'mobile_Num'=>'required',
               'gender'=>'required',
           
           ]);
   
         $wholesellers = Wholeseller::find($id);
         $wholesellers->name =$request->name;
         $wholesellers->address =$request->address;
         $wholesellers->mobile_Num =$request->mobile_Num;
         $wholesellers->gender =$request->gender;
         $wholesellers->save();
         return redirect(route('wholeseller.list'))->with('message','wholeseller Updated sucessfully');
        }
    }



    
}
