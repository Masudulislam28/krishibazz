<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\FarmerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\WholesellerController;
use App\Http\Controllers\backend\AdminController;

use App\Http\Controllers\Frontend\FarmerController as FrontendFarmer ;
use App\Http\Controllers\Frontend\WholesellerController as FrontendWholeseller ;
use App\Http\Controllers\Frontend\AdminController as FrontendAdmin ;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () 
{
    return view('frontend.home');

})->name('home');
///Backend route group
//admin login

Route::get('admin/login/form',[UserController::class,'adminloginform'])->name('adminlogin.form');
Route::post('admin/login/process',[UserController::class,'adminloginprocess'])->name('adminlogin.process');

Route::group(['middleware' => 'auth'],function(){


    Route::get('/home', function () {
        return view('master');
    
    })->name('dashboard');


    //Farmer code

Route::get('farmer/form',[FarmerController::class,'showForm'])->name('farmer.form');
Route::post('farmer/form',[FarmerController::class,'storeForm'])->name('farmer.form');
Route::get('farmer/list',[FarmerController::class,'showList'])->name('farmer.list');

//FarmerListview

Route::get('farmer/view/{id}',[FarmerController::class,'viewFarmer'])->name('farmer.view');


//FarmerListdelete

Route::get('farmer/delete/{id}',[FarmerController::class,'deleteFarmer'])->name('farmer.delete');


//Farmer List edit

Route::get('farmer/editlist/{id}',[FarmerController::class,'editList'])->name('farmer.editlist');
Route::post('farmer/updatelist/{id}',[FarmerController::class,'UpdateList'])->name('farmer.updatelist');



//wholeseller code

Route::get('wholeseller/form',[WholesellerController::class,'showForm'])->name('wholeseller.form');
Route::post('wholeseller/form',[WholesellerController::class,'storeForm'])->name('wholeseller.form');
Route::get('wholeseller/list',[WholesellerController::class,'showList'])->name('wholeseller.list');

//wholesellerListview

Route::get('wholeseller/view/{id}',[WholesellerController::class,'viewWholeseller'])->name('wholeseller.view');


//wholesellerListdelete

Route::get('wholeseller/delete/{id}',[WholesellerController::class,'deletewholeseller'])->name('wholeseller.delete');

// wholeseller list edit 

Route::get('wholeseller/editlist/{id}',[WholesellerController::class,'editList'])->name('wholeseller.editlist');
Route::post('wholeseller/updatelist/{id}',[WholesellerController::class,'UpdateList'])->name('wholeseller.updatelist');

//All registered

Route::get('all/registered/person',[AdminController::class,'allregistered'])->name('all.registered');

//registered user delete

Route::get('all/registered/delete/{id}',[AdminController::class,'allregistereddelete'])->name('allregistered.delete');

//admin view all post


Route::get('view/all/post',[AdminController::class,'viewallpost'])->name('all.post');

//admin view all post delete



Route::get('all/post/delete/{id}',[AdminController::class,'allpostdelete'])->name('allrpost.delete');



//admin manage transaction


Route::get('manage/transaction',[AdminController::class,'managetransaction'])->name('manage.transaction');


//admin manage transaction delete

Route::get('transaction/delete/{id}',[AdminController::class,'transactiondelete'])->name('transaction.delete');

//admin My income

Route::get('admin/my/income',[AdminController::class,'adminmyincome'])->name('admin.myincome');



//admin logout

Route::get('admin/logout',[UserController::class,'adminlogout'])->name('admin.logout');

});
//Registration

Route::get('registration/form',[UserController::class,'regform'])->name('reg.form');
Route::post('registration/store',[UserController::class,'regStore'])->name('reg.store');


//Login

Route::get('login/form',[UserController::class,'loginForm'])->name('login.form');



//Login Authentication

Route::post('login/process',[UserController::class,'userLogin'])->name('user.login');
Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');


//Profile view

Route::get('/view/profile',[UserController::class,'viewProfile'])->name('view.profile');






//Frontend FarmerController

Route::group(['namespace'=>'Frontend'],function()

{

 Route::get('farmer/post',[FrontendFarmer::class,'postadvertise'])->name('farmer.post');
 Route::post('farmer/post',[FrontendFarmer::class,'storeadvertise'])->name('farmer.post');
 Route::get('advertise/view',[FrontendFarmer::class,'viewadvertise'])->name('advertise.view');
 Route::get('my/post',[FrontendFarmer::class,'myPost'])->name('my.post');
 Route::get('my/post/delete/{id}',[FrontendFarmer::class,'myPostdelete'])->name('my.postdelete');


 Route::get('view/sell/request',[FrontendFarmer::class,'viewsellrequest'])->name('view.sellrequest');
 Route::get('/approve/sell/request/{id}',[FrontendFarmer::class,'approverequest'])->name('approve.request');
 Route::get('/reject/sell/request/{id}',[FrontendFarmer::class,'rejectrequest'])->name('reject.request');




 //view product details

 Route::get('view/details/{id}',[FrontendFarmer::class,'viewDetails'])->name('view.details');
 Route::get('farmerview/details/{id}',[FrontendFarmer::class,'farmerviewdetails'])->name('farmerview.details');

 
 
}

);
//Frontend WholesellerController

Route::group(['namespace'=>'Frontend'],function()

{

 Route::get('checkout/form/{id}',[FrontendWholeseller::class,'checkoutForm'])->name('checkout.form');

 Route::post('place/order/{id}',[FrontendWholeseller::class,'placeOrder'])->name('place.order');


//My transaction(wholeseller)

Route::get('view/my/transaction',[FrontendWholeseller::class,'viewmytransaction'])->name('view.mytransaction');

}
);

//edit

Route::get('farmer/edit/{id}',[FarmerController::class,'edit_product'])->name('farmer.edit');
Route::post('farmer/update/{id}',[FarmerController::class,'update_product'])->name('farmer.update');

//Farmer
Route::get('farmer/advertise',[FarmerController::class,'postAdvertise'])->name('farmer.advertise');
Route::post('farmer/advertise',[FarmerController::class,'store'])->name('farmer.advertise');
Route::get('farmer/view_advertise',[FarmerController::class,'view_advertise'])->name('wholeseller.view_advertise');
  