<?php

namespace App\Http\Controllers;
use App\Models\DashboardUser;

class DashboardController extends Controller{

    public function index(){

        $dashboard_usuarios = DashboardUser::all();

        return view ('home',compact('dashboard_usuarios'));

    }




}
