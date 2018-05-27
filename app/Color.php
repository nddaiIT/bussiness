<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table="colors";
    protected $fillable=array('color_name','color_code','thumnail');

    public static function getAll(){
    	return Color::get();
    }

    public static function del($id){
    	return Color::where('color_id','=',$id)->delete();
    }

    public static function storeData($data){
    	return Color::create($data);
    }

    public static function updateData($id,$data){
    	return Color::find($id)->update($data);
    }

    public function productDetail(){
        return $this->hasOne('App\ProductDetail','color_id','color_id');
    }
}
