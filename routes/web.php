<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\FavouriteList;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
// //   $datas=  Category::with('subcategories')->get();
//       return view('front.account');
// });
Route::get('/home', function () {
    $datas=  Category::with('subcategories')->get();
    $subcategory=[];
    $favourites=FavouriteList::with('products')->get();
// echo json_encode($favourites);exit;
        return view('front.webproduct',compact('datas','subcategory','favourites'));
  });
Route::post('home',function(){
    $subcategory=request()->subcategory;
    $datas=  Category::with('subcategories')->get();
   $subcategory= Subcategory::with('products')->findOrFail($subcategory);
    
    return view('front.webproduct',compact('datas','subcategory'));
});
Route::get('/account', function () {
    return view('front.account');
})->name('account');

// Route::match(['get','post'],'admin','AdminController@login');


Route::post('/register',['as=>register','uses'=>'AccountController@register']);
Route::post('/login',['as=>register','uses'=>'AccountController@login']);
Route::post('/logout',['as=>register','uses'=>'AccountController@logout']);




Route::prefix('admin')->group(function () {
       // Login Related Route
Route::match(['get','post'],'/login',['as'=>'admin-login','uses'=>'AdminController@login']);
Route::get('/logout',['as'=>'logout','uses'=>'AdminController@logout']);
   
Route::group(['middleware' => ['admin']],function(){
Route::get('/dashboard', function () {
    $product=Product::with('product_varient')->paginate(10);
    return view('dashboard');
})->name('admin-dashboard');
Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::resource('product',ProductController::class);
       });
});