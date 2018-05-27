<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable=array('category_id','manufacture_id','product_name','thumbnail','slug','description','sale_price','origin_price', 'product_id');

    public static function getAll(){
    	return Product::get(); 
    }

    public static function del($id){
        return Product::where('product_id','=', $id)->delete();
    }

    public static function storeData($data){
    	return Product::create($data);
    }

    public static function updateData($id,$data){
    	return Product::where('product_id',$id)->update($data);
    }

    public function productDetail(){
        return $this->hasMany('App\ProductDetail','id','product_id');
    }

    public function manufacture(){
        return $this->belongsTo('App\Manufacture','manufacture_id','manufacture_id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id','category_id');
    }
}
