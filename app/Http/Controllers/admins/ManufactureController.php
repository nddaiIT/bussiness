<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manufacture;
class ManufactureController extends Controller
{
    public function index(){
    	$manus=Manufacture::getAll();
    	return view('admins.manufactures.index',[
    		"manus" => $manus,
    	]);
    }
    
    public function store(Request $request){
    	$result=Manufacture::storeData($request->all());
    	return redirect()->back();
    }

    public function update(){
    	$result=Manufacture::updateData($id,$request->all());
    	return redirect()->back();
    }

    public function destroy($id){
    	$result=Manufacture::del($id);
    	return redirect()->back();
    }
}
