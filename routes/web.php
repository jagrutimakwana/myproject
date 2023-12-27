<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view('website/index');
});

Route::get('/about', function () {
    return view('website/about');
});

Route::get('/product', function () {
    return view('website/product');
});

Route::get('/testimonial', function () {
    return view('website/testimonial');
});

Route::get('/contact',[contactController::class,'create']);
Route::post('/contact',[contactController::class,'store']);
    


Route::get('/login',[customerController::class,'login']); //->middleware('customerbeforelogin');
Route::post('/login_auth',[customerController::class,'login_auth']); //->middleware('customerbeforelogin');

Route::get('/customerlogout',[customerController::class,'logout']); //->middleware('customerafterlogin');


Route::get('/signup',[customerController::class,'create']); //->middleware('customerbeforelogin');
Route::post('/signup',[customerController::class,'store']); //->middleware('customerbeforelogin');

Route::get('/profile',[customerController::class,'profile']); //->middleware('customerafterlogin');
Route::get('/profile/{customer_id}',[customerController::class,'edit']); //->middleware('customerafterlogin');

Route::post('/profile/{customer_id}',[customerController::class,'update']); //->middleware('customerafterlogin');




// blade template

Route::get('/blade', function () {
    return view('website/blade');
});



////////////////////////////////////////////////////////////////////////////////////////////////////////////



//Route::group(['middleware'=>['adminbeforelogin']],function(){

Route::get('/admin_login',[adminController::class,'admin_login']);
Route::post('/alogin_auth',[adminController::class,'login_auth']);
//});

//Route::group(['middleware'=>['adminafterlogin']],function(){

Route::get('/adminlogout',[adminController::class,'adminlogout']);
//});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/add_cate',[categoryController::class,'create']);
Route::post('/add_cate',[categoryController::class,'store']);

Route::get('/manage_cate',[categoryController::class,'show']);
Route::get('/manage_cate/{id}',[categoryController::class,'destroy']);

Route::get('/editcate/{id}',[categoryController::class,'edit']);

Route::post('/updatecate/{id}',[categoryController::class,'updatecate']);

Route::get('/add_prod',[productController::class,'create']);
Route::post('/add_prod',[productController::class,'store']);

Route::get('/manage_prod',[productController::class,'show']);
Route::get('/manage_prod/{id}',[productController::class,'destroy']);

Route::get('/editprod/{id}',[productController::class,'edit']);

Route::post('/updateprod/{id}',[productController::class,'updateprod']);

Route::get('/manage_cus',[customerController::class,'show']);
Route::get('/delete/{id}',[customerController::class,'destroy']);

Route::get('/manage_cus/{id}',[customerController::class,'status']);


Route::get('/add_emp',[employeeController::class,'create']);
Route::post('/add_emp',[employeeController::class,'store']);

Route::get('/manage_emp',[employeeController::class,'show']);
Route::get('/manage_emp/{id}',[employeeController::class,'destroy']);

Route::get('/editemp/{id}',[employeeController::class,'edit']);

Route::post('/update_emp/{id}',[employeeController::class,'update_emp']);

Route::get('/manage_feed',[feedbackController::class,'show']);
Route::get('/manage_feed/{id}',[feedbackController::class,'destroy']);


Route::get('/manage_cont',[contactController::class,'show']);
Route::get('/manage_cont/{id}',[contactController::class,'destroy']);



/////////////////////////////////////////////////////////////////////////////////////////////////////



Route::get('/emp_login',[employeeController::class,'emp_login']);
Route::post('/emplogin_auth',[employeeController::class,'emplogin_auth']);


Route::get('/emplogout',[employeeController::class,'emplogout']);


Route::get('/emp_dashboard', function () {
    return view('employee/emp_dashboard');
});

Route::get('/add_cate',[categoryController::class,'create']);
Route::post('/add_cate',[categoryController::class,'store']);

Route::get('/manage_cate',[categoryController::class,'show']);
Route::get('/manage_cate/{id}',[categoryController::class,'destroy']);

Route::get('/editcate/{id}',[categoryController::class,'edit']);

Route::post('/updatecate/{id}',[categoryController::class,'updatecate']);

Route::get('/add_prod',[productController::class,'create']);
Route::post('/add_prod',[productController::class,'store']);

Route::get('/manage_prod',[productController::class,'show']);
Route::get('/manage_prod/{id}',[productController::class,'destroy']);

Route::get('/editprod/{id}',[productController::class,'edit']);

Route::post('/updateprod/{id}',[productController::class,'updateprod']);

Route::get('/manage_cus',[customerController::class,'show']);
Route::get('/delete/{id}',[customerController::class,'destroy']);

Route::get('/manage_cus/{id}',[customerController::class,'status']);


Route::get('/manage_cont',[contactController::class,'show']);
Route::get('/manage_cont/{id}',[contactController::class,'destroy']);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////





