<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class UserHome extends Controller
{
    //View all data
    public function viewData(){
        $products = products::where('categori', 'phone')->get();
        $productswatch = products::where('categori', 'watch')->get();
        $data = session()->get('data');
        //echo($products);
        return view('user.user_home',compact('products','productswatch','data'));
    }

}
