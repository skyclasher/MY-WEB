<?php

namespace App\Http\Controllers;

use View;
use App\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact_hdl(Request $request)
    {
		$name = $request->input('name');
		$email = $request->input('email');
		$subject = $request->input('subject');
		$message = $request->input('message');
		
		$contact = new Model\d_contact;
		
		$contact->name = $name;
		$contact->email = $email;
		$contact->subject = $subject;
		$contact->message = $message;
		
		if(!$contact->save()){
			return view('home')->with('msg', 2);	
		}else{
			return view('home')->with('msg', 1);	
		}
    }
}
