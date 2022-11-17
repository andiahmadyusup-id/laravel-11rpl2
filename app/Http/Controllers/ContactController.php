<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
       $data = Siswa::all();
        return view('page.contact')->with('data', $data);
    }
}
