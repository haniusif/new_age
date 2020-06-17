<?php

namespace App\Http\Controllers\Push;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Push extends Controller
{
 

    function __construct() {
    }


    public function getPush($title,$message,$data=[],$image='http://yala-b7r.cremesolutions.com/assets/img/brand/blue.png',$is_background = FALSE) {
        
        $res = array();



        $res['notification']['title'] = $title;
        $res['notification']['body'] = $message;
        
        
        
        $res['data']['title'] = $title;
        $res['data']['body'] = $message;
        $res['data']['isRead'] = false;
        $res['data']['type'] = 1;
        $res['data']['date'] = date('Y-m-d h:i:s');
        $res['data']['date_human'] = date('Y-m-d h:i:s');
        $res['data']['other'] = [];
        
        
  

        return $res;

    }
    
    
        public function NewGetPush($title,$message) {
            
            
      
          
          
        
        $res = array();



        $res['notification']['title'] = $title;
        $res['notification']['text'] = $message;
        $res['notification']['image'] = "http://yala-b7r.cremesolutions.com/assets/img/brand/blue.png";
        $res['notification']['click_action'] = "FLUTTER_NOTIFICATION_CLICK";
        $res['notification']['sound'] = "alert.mp3";
        
        
        
        
        $res['data']['title'] = $title;
        $res['data']['text'] = $message;
        $res['data']['click_action'] = "FLUTTER_NOTIFICATION_CLICK";
        $res['data']['sound'] = "alert.mp3";
        
  
        
  

        return $res;

    }





}