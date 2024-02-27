<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class AdminHome extends Controller
{


    //View all data
    public function viewData(){
        $products = products::where('categori', 'phone')->get();
        $productswatch = products::where('categori', 'watch')->get();
        $data = session()->get('data');
        return view('Admin.admin_home.admin_home',compact('products','productswatch','data'));
    }




}
