<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Models\Product;
use Cart;
use Auth;

class HomeController extends Controller
{	
	 public function __construct(){
	 	$category = Categories::where('status',1)->get();
	 	$producttype = ProductTypes::where('status',1)->get();
	 	view()->share(['category' => $category, 'producttype' => $producttype]);
	 }

	 public function index(){
	 	$product1 = Product::where('status',1)->where('idCategory',1)->get();
	 	$product2 = Product::where('status',1)->where('idCategory',2)->get();
	 	$product3 = Product::where('status',1)->where('idCategory',4)->get();
	 	$product = Product::where('status',1)->get();
		return view('client.pages.index',['prodochoi' => $product1, 'proquanao' =>$product2 ,'progiaydep'=>$product3, 'product'=>$product]);
	}

	public function getDetail($slug){
		$productDetail = Product::where('slug', $slug)->first();
		$count1 = Product::where('slug', $slug)->count();
		$idProType = ProductTypes::where('slug',$slug)->first();
		$count2 = ProductTypes::where('slug',$slug)->count();
		if($count1 > 0){
			return view('client.pages.detail',['product' => $productDetail]);
		}elseif($count2 >0)
		{
			$productByProdType = Product::where('idProducType',$idProType->id)->get();
			return view('client.pages.detail_protype',['product'=> $productByProdType, 'producttype' => $idProType]);
		}
	}
}
