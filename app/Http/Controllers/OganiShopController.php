<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OganiShopController extends Controller
{
    public function index(){
        return view('Frontend.home.home');
    }
    public function ShopCategory(){
        return view('Frontend.shop.shop-category');
    }

    public function shopeDetails(){
        return view('Frontend.page.shop-details');
    }
    public function shoppingCard(){
        return view('Frontend.page.shopping-card');
    }
    public function checkOut(){
        return view('Frontend.page.check-out');
    }
    public function blogDetails(){
        return view('Frontend.page.blog-details');
    }
    public function blog(){
        return view('Frontend.blog.blog');
    }
    public function contact(){
        return view('Frontend.contact.contact');

    }
}

