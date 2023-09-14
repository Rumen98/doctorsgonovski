<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index(){
        return view('blog-details.index', [
            'title' => 'Blog Details Page'
        ]);
    }

    public function showDetail1() {
        return view('blog-details.detail_1');
    }
    
    public function showDetail2() {
        return view('blog-details.detail_2');
    }
    
    public function showDetail3() {
        return view('blog-details.detail_3');
    }
    
    public function showDetail4() {
        return view('blog-details.detail_4');
    }
    
}
