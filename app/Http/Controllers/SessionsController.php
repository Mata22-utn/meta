<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller{
    //
    public function create (){

        return view('auth.login');
    }

    public function store(){

        if(auth()->attempt(request(['email', 'password'])) == false){

            return back()->withErrors(['message' =>'El email o password es incorrecto, favor de verificar']);
                
        }else {
            if(auth()->user()->role == 'admin'){

                return redirect()->route('admin.index');

            }else{
                return redirect()->to('/');
            }
        } 

        
    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/');
    }
          
}
