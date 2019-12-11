<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function index(){

   	return view('admin.index');
   }
   
   public function category(){

   	return view('admin.category');
   }
   public function addCategory(){

   	return view('admin.addCategory');
   }
   public function products(){

   	return view('admin.products');
   }
   public function addProduct(){

      return view('admin.addProduct');
   }
   public function suppliers(){

      return view('admin.suppliers');
   }
   public function addSupplier(){

      return view('admin.addSupplier');
   }
   public function reviews(){

      return view('admin.reviews');
   }
   public function banners(){

      return view('admin.banners');
   }
   public function addBanner(){

      return view('admin.addBanner');
   }
   public function orders(){

      return view('admin.orders');
   }
   public function returns(){

      return view('admin.returns');
   }
   public function coupons(){

      return view('admin.coupons');
   }
   public function customers(){

      return view('admin.customers');
   }
   public function mail(){

      return view('admin.mail');
   }
}
