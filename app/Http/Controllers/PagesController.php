<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index()
    {

    if(View::exists('index.'))
    	return view('index');

    else
    	return 'no view exists';
     


    }
}
