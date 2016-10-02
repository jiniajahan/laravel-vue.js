<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Product;
use DB;


class ProductsController extends Controller
{
    public function index(){

        $products = DB::table('products')->get();

//        dd($products);
//        exit();
        
        return view ('products.index', compact('products'));
    }

    public function show($id){

        $products = Product::findOrFail($id);
        return view('products.show',compact('products'));

    }


    public function create(){

        return view('products.create');
    }

    public function store(){

        $input = Request::all();
        
        \Log::info($input);

        Product::create($input);

        return redirect('products');
    }

}
