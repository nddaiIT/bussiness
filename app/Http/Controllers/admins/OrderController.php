<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller
{
    public function index(){
    	$orders=Order::getAll();
    	return view('admins.orders.index',[
    		"orders" => $orders, 
    	]);
    }

    public function store(Request $request){
    	$result=Order::storeData($request->all());
    	return redirect()->back();
    }

    public function update(){
    	$result=Order::updateData($id,$request->all());
    	return redirect()->back();
    }

    public function destroy($id){
    	$result=Order::del($id);
    	return redirect()->back();
    }
}
