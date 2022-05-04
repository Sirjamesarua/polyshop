<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class MessageNotificationController extends Controller
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

    public function message()
    {
        return view('message');
    }

    public function contactseller($seller_id)
    {
        $receiver_id=$seller_id;
        $sender_id = auth()->user()->id;
        $chatlists=DB::table('messages')->whereIn('receiver_id',[$receiver_id,$sender_id])->whereIn('sender_id',[$receiver_id,$sender_id])->get();
        return view('contactseller')->with('receiver_id',$receiver_id)->with('chatlists',$chatlists);
        //return view('contactseller')->with();
    }

    public function savemessage(Request $request){
        
        if($_POST['message'] !="" && $_POST['receiver_id'] !=""){

            $messagecontent=$_POST['message'];
            $receiver_id=$_POST['receiver_id'];

            $message = new Message;
            $message->content=$messagecontent;
            $message->sender_id=auth()->user()->id;
            $message->receiver_id=$receiver_id;
            $message->save();

            return response()->json([
                'status'=>200,
                //'message'=>'messageed Succefully',
            ]);

        }else{
            return response()->json([
                'status'=>400,
                //'errors'=>$validator->messages(),
            ]);

        }
        
    }


    public function notification()
    {
        return view('notification');
    }




}
