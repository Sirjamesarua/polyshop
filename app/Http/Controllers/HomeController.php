<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $seller_id=auth()->user()->id;
        $user=User::find($seller_id);
        $products=DB::table('product')->where('seller_id',$seller_id)->orderBy('id','desc')->get();
        return view('home')->with('products',$products)->with('user',$user);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changepix(Request $request)
    {
        $this->validate($request,[
            'image'=>'required',
        ]);

        $user_id= auth()->user()->id;
        $user= User::find($user_id);

        if($request->hasFile('image')){
            $profilepix=$request->file('image');
            $user= User::find($user_id);

                //get just ext
                $extension=$profilepix->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$user->name.'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$profilepix->storeAs('public/profilepix',$fileNameToStore);


            $user->profile_image=$fileNameToStore;
            $user->save();
        }

        return back();
    }


}
