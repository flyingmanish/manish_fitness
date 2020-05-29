<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
class TrainerController extends Controller
{

    public function index() {

    	return view('trainers');
    }
}
