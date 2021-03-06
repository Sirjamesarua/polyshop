<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	//$products=Product::all();
    	$products=Product::orderBy('id','desc')->get();
    	return view('welcome')->with('products',$products);
    }
}
