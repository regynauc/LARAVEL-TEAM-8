<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',['title' => 'Register']    
        );
    }
    public function store(Request $request)
    {
       $validateData = $request->validate([
            'name'=>'required | max:255',
            'email'=>'required |email:dns|unique:users',
            'password'=>'required | min:5 |max:100' 
        ]);

        user::create( $validateData);

        $request->session()->flash('succes','Registrasi Berhasil,Gass Login');

        return redirect('/login');
    }
}
