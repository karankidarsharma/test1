<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index()
    {

    if(View::exists('pages.index'))

     return view('pages.index')
             ->with('name','karan')
              ->with('age','25');

    	//return view('pages.index', ['text' => '<h1>Laravel</h1>']);

    else
    	return 'no view exists';
     


    }
}
