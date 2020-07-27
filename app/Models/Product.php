<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'product';

   protected $fillable = [
   		'name', 'slug', 'desciption', 'quantity', 'price', 'promotional', 'idCategory', 'idProducType','image', 'status',
   ];

   public function categories(){
   	return $this->belongsTo('App\Models\Categories','idCategory','id');
   }

   public function productTypes(){
   	return $this->belongsTo('App\Models\ProductTypes','idProducType','id');
   }
}
