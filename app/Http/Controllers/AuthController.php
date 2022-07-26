<?php

namespace App\Http\Controllers;

 use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    //
    public function login(Request $req){
        if($req->isMethod("post")){

            
            $contact = $req->contact;
            $password = $req->password;
             
            $getUser  = User::where('contact',$contact)->first();
            
            $loginData['email'] = $getUser->email;
            $loginData['password'] = $password;

            if(Auth::guard('web')->attempt($loginData)){
                return redirect()->route('homepage'); 
            }
            else{
                return redirect()->back()->with("error","try again");
            }
        }
      return view("login");
    }
    public function register(request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'password'=>'required',
        ]);
     User::create($data);
     return redirect()->route('login');
    }
    return view("register");

    }
    public function logout(){
     Auth::logout();
     return redirect()->route('login');
    }
    
}
