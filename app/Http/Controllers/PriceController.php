<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends BasicController
{
    public function index(){


        return view('test.order');
    }
}
