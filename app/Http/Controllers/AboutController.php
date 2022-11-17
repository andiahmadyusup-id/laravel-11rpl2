<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $profile = ['name' => 'Andi Ahmad', 'role' => 'teller'];
        return view('page.about', $profile);
    }
}
