<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(){
        $validated= request()->validate([
            'name' => 'required | min:5 | max:50',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | confirmed',
            'image'=> 'required|image| mimes : jpeg,png,jpg,gif|max : 1080',
'bio'=>'required | min:5 | max:200'
]);
        $validated['password']=bcrypt($validated['password']);


        if(request()->hasFile('image')){
            $imagePath = request()->file('image')->store('images','public');
            $validated['image'] = $imagePath;
        }

        User::create($validated);

        return redirect()->route('main');

}

}

