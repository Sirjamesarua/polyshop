<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\User;
use App\Models\Reportproduct;
use App\Models\Reportperson;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ReportproductandsellerController extends Controller
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

    public function reportproduct(Request $request){
    	
    	if($_POST['report'] !="" && $_POST['product_id'] !=""){

    		$reportcontent=$_POST['report'];
    		$id=$_POST['product_id'];

            $report = new Reportproduct;
            $report->content=$reportcontent;
            $report->seller_id=auth()->user()->id;
            $report->product_id=$id;
            $report->save();

        	return response()->json([
        		'status'=>200,
        		'message'=>'Reported Succefully',
        	]);

    	}else{
        	return response()->json([
        		'status'=>400,
        		'errors'=>$validator->messages(),
        	]);

    	}
        
    }


    public function reportperson(Request $request){
    	
    	if($_POST['report'] !="" && $_POST['seller_id'] !=""){

    		$reportcontent=$_POST['report'];
    		$id = $_POST['seller_id'];

            $report = new Reportperson;
            $report->content=$reportcontent;
            //$report->reporter_id=auth()->user()->id;
            $report->reporter_id=2;
            $report->productseller_id=2;
            //$report->seller_id=$id;
            $report->save();

        	return response()->json([
        		'status'=>200,
        		'message'=>'Reported Succefully',
        	]);

    	}else{
        	return response()->json([
        		'status'=>400,
        		'errors'=>$validator->messages(),
        	]);

    	}
        
    }



}
