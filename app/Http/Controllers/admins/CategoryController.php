<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Yajra\Datatables\Datatables;
class CategoryController extends Controller
{ 
    public function index(){
        $cates=Category::all();
    	return view('admins.categories.index',[
            "cates" =>$cates,
        ]);
    }

    public function getData(){
        // $categories=Category::select('category_id','category_name','created_at','updated_at');
        return Datatables::of(Category::all())->make(true);
    }
    public function store(Request $request){
    	$request->slug=str_slug($request->category_name)."-".$request->category_id;
    	$result=Category::storeData($request->all());
    	return redirect()->back();
    }

    public function update(Request $request){
    	$request->slug=str_slug($request->category_name)."-".$request->category_id;
        $id=$request->category_id;
    	$result=Category::updateData($id,$request->except(['_token','_method']));
    	return redirect()->back();
    }

    public function destroy($id){
    	$result=Category::del($id);
    	return redirect()->back();
    } 
}
