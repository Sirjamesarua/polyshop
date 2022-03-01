<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
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

    public function create(Request $request){
    	
        $this->validate($request,[
            'review'=>'required',
        ]);


        $id=$request->input('product_id');
            $review = new Reviews;
            $review->content=$request->input('review');
            $review->Authur_id=auth()->user()->id;
            $review->Post_id=$id;
            $review->save();

        $reviews= DB::table('reviews')->where('Post_id',$id)->get();
        //$reviews=Reviews::find($id)->get();
        $product=Product::find($id);
        //return view('products.show')->with('reviews',$reviews)->with('product',$product);
        return back();
    }
}
