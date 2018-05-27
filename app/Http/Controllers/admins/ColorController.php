<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;
class ColorController extends Controller
{
    public function index(){
    	$colors=Color::getAll();
    	return view('admins.colors.index',[
    		"colors" => $colors, 
    	]);
    }

    public function store(Request $request){
    	$result=Color::storeData($request->all());
    	return redirect()->back();
    }

    public function update(){
    	$result=Color::updateData($id,$request->all());
    	return redirect()->back();
    }

    public function destroy($id){
    	$result=Color::del($id);
    	return redirect()->back();
    }
}
