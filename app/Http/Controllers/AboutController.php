<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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

    public function about()
    {
        /*$reviews= DB::table('reviews')->where('Post_id',$id)->get();
        //$seller_id= DB::table('product')->where('Post_id',$id)->get();

        //$reviews=Reviews::find($id)->get();
        $product=Product::find($id);
        $seller_id=$product->seller_id;
        $user= DB::table('users')->where('id',$seller_id)->first();

        //RELATED PRODUCT
        $relatedproducts=Product::query()->where('name','LIKE',"%{$product->name}%")->orWhere('description','LIKE',"%{$product->description}%")->orWhere('category',$product->category)->get();
        //$relatedcatecorys=

        return view('products.show')->with('reviews',$reviews)->with('product',$product)->with('user',$user)->with('relatedproducts',$relatedproducts);*/
        return view('about');
    }
    
}
