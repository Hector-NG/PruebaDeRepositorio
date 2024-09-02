<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
use Illuminate\Http\Request;
use App\Models\Product;

Route::get('Products',function(){
    // $Product = Product::all();
    $Product = Product::orderBy('created_at','desc')->get();
    return view('Products.index',compact('Product'));
})-> name('products.list');

Route::get('Products/create',function(){
    return view('Products.create');
})-> name('products.create');

Route::post('Products',function(Request $request){
    $request->all();
    $NewProduct = new Product();
    $NewProduct->description = $request -> input('description');
    $NewProduct->price = $request -> input('price');
    $NewProduct->save();
    return redirect()->route('products.list')->with('Informacion', "Producto creado exitosamente");
})->name('products.store');