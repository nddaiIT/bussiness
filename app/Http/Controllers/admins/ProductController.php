<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Manufacture;
use App\Color;
use App\Size;
use \DB;
use App\ProductDetail;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index(){
    	$products=Product::getAll();
    	$cates=Category::getAll();
        $manus=Manufacture::getAll();
    	$colors=Color::getAll();
        $sizes=Size::getAll();
        $productDetails=ProductDetail::getAll();
    	return view('admins.products.index',[
    		"products" => $products,
    		"cates" => $cates,
    		"manus" => $manus,
            "colors" =>$colors,
            "sizes" =>$sizes,
            "productDetails" =>$productDetails,
    	]);
    }

    public function store(Request $request){
        $request->slug=str_slug($request->product_name)."-".rand(1,100000);
    	$result=Product::storeData($request->all());
        return redirect()->back();
        
    }

    public function eu_size($size_id){

        // return
        return ProductDetail::where('size_id','=',$size_id)->sizes['eu_size'];
    }
    public function createDetailProduct(Request $request){
        $quantity = $request->quantity;
        $size_id = $request->size_id;
        $product_id=$request->product_id;
        
        foreach ($request->color_id  as $key => $value) {
            // echo "color: ". $value ." quantity: ".$quantity[$key];
            $check=ProductDetail::where('product_id', $request->product_id)->where('size_id', $size_id[$key])->where('color_id',$value)->first();
            
            if($check){
                $PDArray=[];
                $PDArray['product_id']=$request->product_id;
                $PDArray['size_id']=$size_id[$key];
                $PDArray['color_id']=$value;
                $PDArray['quantity']=$quantity[$key];

                ProductDetail::updateData($PDArray['product_id'],$PDArray['size_id'],$PDArray['color_id']=$value,$PDArray);
            }else{
                $PDArray=[];
                $PDArray['product_id']=$request->product_id;
                $PDArray['size_id']=$size_id[$key];
                $PDArray['color_id']=$value;
                $PDArray['quantity']=$quantity[$key];

                ProductDetail::create($PDArray);
            }
        }
        return redirect()->back();
    }

    public function update(Request $request){
    	// $request->category_id=Category::where('category_name',$request->category_id)->value('category_id');

    	// $request->manufacture_id=Manufacture::where('manufacture_name',$request->manufacture_id)->value('manufacture_id');
        

        $productArray=[];
        $product_id=$request->product_id;
        $productArray['category_id']=$request->category_id;
        $productArray['manufacture_id']=$request->manufacture_id;
        $productArray['product_name']=$request->product_name;
        // $productArray['thumnail']=$request->thumnail;
        $productArray['slug']=str_slug($request->product_name)."-".rand(1,100000);
        $productArray['description']=$request->description;
        $productArray['sale_price']=$request->sale_price;
        $productArray['origin_price']=$request->origin_price;
        Product::updateData($product_id,$productArray);
        
    	return redirect()->back();
    }

    public function destroy($id){
    	$result=Product::del($id);
    	return redirect()->back();
    }

    public function imageUploadPost(Request $request){
        $data=array();
        $images=array();
        if($files=$request->file('image')){
            foreach ($files as $key => $file) {
                $temp=[];
                $temp['link']=Storage::disk('local')->put('pubic/images',$file);
                $temp['color_id']=$request['color_id'];
                $temp['product_id']=$request['product_id'];
                Image::storeData($temp);
            }
        }
        return response()->json(['data'=>images],200);
    }

    public function getColors($id){
        $colors=DB::table('product_details')->where('product_id','=',$id)
                                ->join('colors','product_details.color_id','=','colors.color_id')
                                ->select('product_details.color_id as color_id','color_name as color_name')
                                ->distinct('color_id')
                                ->get();
        return response()->json([
            'data'=>$colors,
        ],200);
    }
    public function getImages($id){
        $images=DB::table('images')->where('product_id','=',$id)->get();
        return response()->json([
            'data' =>$images,
        ],200);
    }

    public function delImages($id){
        $link=DB::table('images')->where('image_id','=',$id)->first()->link;
        DB::table('images')->where('id','=',$id)->delete();
        Storage::disk('local')->delete($link);
    }
}
