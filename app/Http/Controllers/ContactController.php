<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
class ContactController extends Controller
{
    public function index() {
    	return view('contact');
    }

    public function save(Request $request) {
        dd($request->name);
    	$name= $request->get('name');
    	$email= $request->get('email');
    	$subject= $request->get('subject');
    	$message= $request->get('message');

    	$contacts= Contacts::create(['name'=> $name, 'email'=> $email, 'subject'=>$subject, 'message'=> $message]);

    	return response()->json(["success"=>true]);
    }
}
