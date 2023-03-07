<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function elektronik(){
            return view('tv');
        }

        public function kosmetik(){
            return view('bedak');
        }
    
}
