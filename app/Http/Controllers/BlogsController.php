<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
class BlogsController extends Controller
{

    public function index() {

    	return view('blog');
    }
}
