<?php

namespace App\Http\Controllers\Api;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Input;
class ProductControllerApi extends Controller
{
    //
    public function product_list($category_id = null){
        if($category_id){
            $products = Product::where('category_id', $category_id)->get();
        }
        else{
            $products = Product::all();
        } 
        return response()->json(array(
            'ok' => true,
            'products' => $products,
        ));
    }
    public function product_search(){
        $query = Input::get('query');

        if($query){
            $products = Product::where('name','like','%'.$query.'%')
                            ->orWhere('price','like','%'.$query.'%')
                            ->orWhere('stock_qty','like','%'.$query.'%')->get();
        }
        else{
            $products = Product::all();
        }
        return response()->json(array(
            'ok' => true,
            'products' => $products,
        ));
    }
}
