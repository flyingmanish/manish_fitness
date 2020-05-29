<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class ServiceController extends Controller
{

    public function index() {

    	return view('services');
    }
}
