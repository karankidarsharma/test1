<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    
   public function index()
   {
     $users = [
  
        '0' => [

              'first_name' =>  'karan',
              'city' => 'jammu'                   



             ]
          


     ];

        return view('admin.users.index', compact('users'));
   }


}
