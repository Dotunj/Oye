<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	  
    	 $this->validate($request, [
    	 	'username'=>'required',
    	 	 'password'=>'required'
     ]);

    	   $username = $request->input('username');
    	   $password = $request->input('password');
    
    	if(Auth::attempt(['username'=> $username, 'password'=> $password])) {

           return redirect()->intended('dashboard.index');
        } else {
        	return redirect()->intended('/')->with('status', 'Invalid Username or password');
        }

    }
  public function dashboard()

  {

  	return view('dashboard.index');
  }

  public function logout()
  {

  	Auth::logout();
 
   return redirect('/');
  }

  public function admin()

  {

    return view('admin.users');
  }

  public function store(Request $request)
  
  {
    
     $this->validate($request, [
       'username'=>'required|min:5',
       'password'=>'required|min:6'  

    ]);

     $user = new User;

     $user->username = $request->username;
     $user->email = $request->email;
     $user->password = bcrypt($request->password);

     $user->save();

     return redirect('products')->with('status', 'New Administrator added successfully');
  }

}
