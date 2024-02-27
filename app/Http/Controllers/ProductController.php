<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\products;
class ProductController extends Controller

{
    protected $detail;
    public function __construct(){
        $this->details = new products();
    }

    //View all data
    public function viewData(){
            $response['details'] = $this->details->all();
            return view('Admin.admin_index')->with($response);
    }

    //Add to product intothe database
    public function addproduct(Request $request){
        $name = $request->input('productName');
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('categori');

        $image = time() .'.'. $request->image->extension();

        $request->image->move(public_path('productImages'), $image);
        products::create([
            'product_name' => $name,
            'description' => $description,
            'tumbnail' => $image, // Fix the typo in the column name
            'price' => $price,
            'categori' => $category, // Fix the variable name
            ]);
           return redirect()->back();


    }
    //Delete Product Data
    public function delete($product_id){
        $product = products::find($product_id);
        $image_path = public_path('productImages/'.$product->tumbnail);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $product->delete();
        return redirect()->back();
    }


    //Update Product Details
    public function updateshow($product_id){//USED TO VIEW DATA
        $product = products::find($product_id);
        return view('Admin.admin_update',compact('product'));


    }

    public function update(Request $request, string $id){
            $product = products::findOrFail($id);
            $product-> product_name = $request->input('productName');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->categori=$request->input('categori');

            if($request->hasfile('image')){
                $image_path = public_path('productImages/'.$product->tumbnail);
                if(file_exists($image_path)){
                    unlink($image_path);
                }

                $image = time() .'.'. $request->image->extension();
                $request->image->move(public_path('productImages'), $image);
                $product->tumbnail = $image;
            }
            $product->update();
            return redirect('/panel');
    }
}
