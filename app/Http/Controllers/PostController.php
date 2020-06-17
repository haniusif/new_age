<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Push\Firebase;

use App\Http\Controllers\Push\Push;
use App\User;

class PostController extends Controller
{
        /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function formSubmit(Request $request)

    {

 
        $firebase = new Firebase();
        $push = new Push();
        $regId = $request->token;
  
        $json = $push->NewGetPush($request->title,$request->body);
        $response = $firebase->sendTo($regId, $json);
        

    	return response()->json([$request->all()]);

    }



    public function notify($user_id,$title,$message) {
        
   
        $user = User::find($user_id);  
        $firebase = new Firebase();
        $push = new Push();
        $regId = $user->fb_id;
  
        $json = $push->NewGetPush($title,$message);
        $response = $firebase->sendTo($regId, $json);
        
        

    }
}
