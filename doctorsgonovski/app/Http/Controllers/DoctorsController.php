<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index(){
        return view('doctors.index', [
            'title' => 'Doctors Page'
        ]);
    }
}
