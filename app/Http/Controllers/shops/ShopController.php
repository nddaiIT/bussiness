<?php

namespace App\Http\Controllers\shops;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(){
    	return view('shops.index');
    }
}
