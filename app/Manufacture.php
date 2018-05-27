<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $table="manufactures";
    protected $fillable=array('manufacture_name','description');

    public static function getAll(){
    	return Manufacture::get(); 
    }

    public static function storeData($data){
    	return Manufacture::create($data);
    }

    public static function del($id){
    	return Manufacture::where('manufacture_id','=',$id)->delete();
    }

    public static function updateData($id,$data){
    	return Manufacture::find($id)->update($data);
    }

    public function product(){
        return $this->hasMany('App\Product','manufacture_id','manufacture_id');
    }
}
