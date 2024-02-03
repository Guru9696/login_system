<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class HomeController extends Controller
{
        public function index()
    {
       
        return view('home');
    }
 
    public function updatePost(Request $request, $id)
    {
           $user = User::find($id);
  
            $user->name = $request->input('name');
            $user->email = $request->input('email');
      
            $user->password = Hash::make($request->input( 'password'));
            $user->mobileno = $request->input('mobileno');
            $user->address = $request->input('address');
            $user->update();
        
            return back()->with('success', 'Update successfully');
    }

  
    }

