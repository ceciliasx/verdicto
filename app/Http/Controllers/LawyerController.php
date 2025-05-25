<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index(){
        return view("lawyer.index");
    }
}
