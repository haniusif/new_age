<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\Events\MyEvent;

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
        return view('home');
    }


 
    public function passport()
    {
        return view('passport');
    }



     // pusher 
    public function pusher()
    {
        return view('pusher');
    }

    public function pusher_test(Request $request)
    {

        
        event(new MyEvent($request->msg));
        return  response()->json('will send ', 200);;
    }


    public function firebase()
    {
        return view('firebase');
    }

    public function push(Request $request)
    {

        
      //  event(new MyEvent($request->msg));
        return  response()->json('will send ', 200);;
    } 


    
}
