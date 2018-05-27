<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $table="product_details";
    protected $fillable=array('product_id','color_id','size_id','quantity');

    public static function getAll(){
        return ProductDetail::get(); 
    }
    public static function del($id){
    	return ProductDetail::find($id)->delete();
    }

    public static function storeData($data){
    	return ProductDetail::create($data);
    }

    public static function updateData($id,$id1,$id2,$data){
        return ProductDetail::where('product_id',$id)->where('size_id',$id1)->where('color_id',$id2)->update($data);
    }
    public function product(){
    	return $this->belongsTo('App\Product','product_id','id');
    }

    public function size(){
        return $this->belongsTo('App\Size','size_id','size_id');
    }

    public function color(){
        return $this->belongsTo('App\Color','color_id','color_id');
    }


}
