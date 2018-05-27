<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table="orders";
    protected $fillable=array('order_name','address','mobile','user_id','total','status');

    public static function getAll(){
    	return Order::get(); 
    }

    public static function del($id){
        return Order::where('order_id','=', $id)->delete();
    }

    public static function storeData($data){
    	return Order::create($data);
    }

    public static function updateData($id,$data){
    	return Order::find($id)->update($data);
    }
} 
