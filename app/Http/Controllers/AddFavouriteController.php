<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;
use App\Models\Favourite;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class AddFavouriteController extends Controller
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

    public function addfavourite(Request $request){

        $this->validate($request,[
            'product-id'=>'required',
        ]);

            $addfavourite = new Favourite;
            $addfavourite->product_id=$request->input('product-id');
            $addfavourite->user_id=auth()->user()->id;
        	$addfavourite->save();

            //return 143;
            //REDIRECTING
        return back();

    }


    public function myfavourite(){
    	$user_id=auth()->user()->id;
    	$myfavourites=DB::table('favourites')->where('user_id',$user_id)->orderBy('id','desc')->get();
    	return view('myfavourite')->with('myfavourites',$myfavourites);
    }

    public function removefavourite($id)
    {
        $product=DB::table('favourites')->where('id',$id)->delete();
        //$product=Reviews::find($id);
        //$product->delete();

        return back();
    }

}
