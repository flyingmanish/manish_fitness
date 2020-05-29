<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
class AboutUsController extends Controller
{

    public function index() {

    	return view('about_us');
    }
}
