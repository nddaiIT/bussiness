<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductDetail;
class Size extends Model
{
    protected $table="sizes";
    protected $fillable=array('eu_size','us_men','us_woman','size_cm');

    public static function getAll(){
    	return Size::get();
    }

    public static function del($id){
    	return Size::where('size_id','=',$id)->delete();
    }

    public static function storeData($data){
    	return Size::create($data);
    }

    public static function updateData($id,$data){
    	return Size::find($id)->update($data);
    }

    public function productDetails(){
        return $this->hasOne('App\ProductDetail','size_id','size_id');
    }
}
