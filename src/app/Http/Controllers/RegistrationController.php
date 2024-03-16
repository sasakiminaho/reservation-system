<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(RegistrationRequest $request)
    {
        $registration = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),
        ]);

        return view('thanks');
    }

    public function thanks() {
        return view('thanks');
    }
}
