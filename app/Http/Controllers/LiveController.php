<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function index($id)
    {
    	$data['id']=$id;
    	return view('welcome',compact('data'));
    }
}
