<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller{


    public function tiposus(){


        $users1=UserController::all();

        return view('home', compact('users1'));


    }


}
