<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $fillable=array('category_name','description','status');

    public static function getAll(){
    	return Category::get();
    }

    public static function del($id){
    	return Category::where('category_id','=',$id)->delete();
    }

    public static function storeData($data){
    	return Category::create($data);
    }

    public static function updateData($id,$data){
    	return Category::where('category_id','=',$id)->update($data);
    }

    public function product(){
        return $this->hasMany('App\Product','category_id','category_id');
    }
}
