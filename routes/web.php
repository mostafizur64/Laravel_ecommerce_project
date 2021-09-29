<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\superController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\manufactureController;
use App\Http\Controllers\productController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\checkoutController;




use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;




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
Route::get('/',[Homecontroller::class,'index']);
// Route::get('/', function () {
//     return view('pages.Home_content');
//  });




//fontend Route Are here
//Route::view('layout','layout');
Route::get('/show_by_category_product/{id}',[Homecontroller::class,'Category_by_product']);
Route::get('/show_by_manufacture_product/{id}',[Homecontroller::class,'manufacture_by_product']);
Route::get('show_product_details/{id}',[Homecontroller::class,'Product_details']);
Route::post('add_To_Card',[CartController::class,'addtocart']);
Route::get('product_cartList',[CartController::class,'cartList']);
Route::get('removeToCart/{id}',[CartController::class,'remove']);
Route::get('/Productorder',[CartController::class,'order']);


//Checkout all route are here
Route::get('loginpage',[checkoutController::class,'login']);
Route::get('/checkout',[checkoutController::class,'checkoutpage']);
Route::post('customer_registration',[checkoutController::class,'customer_registration']);


//customer login and logout route are here///////////////////////////
Route::post('customer_login',[checkoutController::class,'customer_login']);
Route::get('customer_logout',[checkoutController::class,'customer_logout']);










// backend
Route::get('/Logout',[superController::class,'logout']);
Route::get('/admin',[adminController::class,'index']);
 Route::get('dashboard',[superController::class,'show_admin']);
Route::post('/admin_dashboard',[adminController::class,'dashboard']);
//Route::view('dashboard','admin.dashboard');



//Category Route

Route::get('/add_category',[CategoryController::class,'index']);
Route::get('/all_category',[CategoryController::class,'Allcategorydatashow']);
Route::post('/save_category',[CategoryController::class,'Save_Category']);
Route::get('/UnActive_category/{id}',[CategoryController::class,'Unactive_Category']);
Route::get('/Active_category/{id}',[CategoryController::class,'active_Category']);
Route::get('/edit_category/{id}',[CategoryController::class,'edit_Category']);
Route::post('/update_category/{id}',[CategoryController::class,'update_Category']);
Route::get('/Delete-category/{id}',[CategoryController::class,'delete_Category']);


//all Manufacture route are here
Route::get('/add_manufacture',[manufactureController::class,'index']);
Route::post('/save_manufacture',[manufactureController::class,'Save_manufacture']);
Route::get('/all_manufacture',[manufactureController::class,'All_manufacture']);
Route::get('UnActive_manufacture/{id}',[manufactureController::class,'unactive_manufacture']);
Route::get('Active_manufacture/{id}',[manufactureController::class,'active_manufacture']);
Route::get('/Delete_manufacture/{id}',[manufactureController::class,'delete_manufacture']);

//all Product route are here ====================

Route::get('/add_product',[productController::class,'index']);
// Route::post('save_product',[productController::class,'Save_product']);
//Route::get('/test',[productController::class,'index']);
Route::post('/save_test',[productController::class,'Save_test']);
Route::get('all_product',[productController::class,'All_product']);
Route::get('Unactive_product/{id}',[productController::class,'unactive_product']);
Route::get('Active_product/{id}',[productController::class,'active_Category']);
Route::get('Delete-product/{id}',[productController::class,'delete_product']);
Route::get('edit_product/{id}',[productController::class,'EditProduct']);



//Sliders Route are here
Route::get('/add_slider',[SliderController::class,'index']);
Route::post('/save_slider',[SliderController::class,'Save_Slider']);
Route::get('all_slider',[SliderController::class,'All_slider']);
Route::get('Unactive_slider/{id}',[SliderController::class,'unactive_slider']);
Route::get('Active_slider/{id}',[SliderController::class,'active_slider']);
Route::get('Delete-slider/{id}',[SliderController::class,'delete_slider']);





//Route::get(' done',[SliderController::class,'Done']);//Just use for test slider demo after slider work done then this Route are restigated.



//Route::get('layout',[SliderController::class,'Layout']);+++++Rijected
