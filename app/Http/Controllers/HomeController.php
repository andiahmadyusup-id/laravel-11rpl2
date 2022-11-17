<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $profile = ['name' => 'Andi Ahmad', 'role' => 'admin'];
        return view('page.home', $profile);
    }
}
