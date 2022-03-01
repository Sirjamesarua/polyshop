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



class MenuAndOthersprofileController extends Controller
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

    public function menu($menu){
    	$menutitle=$menu;
		$menus=DB::table('product')->where('category',$menu)->get();
		return view('menu')->with('menus',$menus)->with('menutitle',$menutitle);
    }

    public function othersprofile($authur_id,$username){
	$othersprofile=DB::table('users')->where('id',$authur_id)->get();
	$otherstopics=DB::table('product')->where('seller_id',$authur_id)->orderBy('id','desc')->get();

       $user_id= auth()->user()->id;
	if($authur_id==$user_id){
		return Redirect('home');
	}else{
		return view('othersprofile')->with('othersprofile',$othersprofile)->with('otherstopics',$otherstopics);
	}
}
}
