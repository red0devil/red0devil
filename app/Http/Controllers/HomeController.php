<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $products;
    private $product;


    public function index()
    {

        $this->products    = Product::orderBy('id', 'desc')->take(8)->get();
        return view('front.home.home', [
            'products'     =>$this->products
        ]);
    }
    public function catagoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.catagory.catagory-product', ['products' =>$this->products]);
    }
    public function subCatagoryProduct($id)
    {
        $this->products = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.catagory.sub-catagory-product', ['products' =>$this->products]);
    }
    public function productDetail($id)
    {
        $this->product = Product::find($id);
        return view('front.product.detail', ['product' => $this->product]);
    }
}
