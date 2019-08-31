<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=product::latest()->get();
        return view('product.CreateProduct',compact('products'));
    }
    public function create(){
        $this->validate(\request(),[
            'productname'  => 'required',
            'category'  => 'required',
            'description'  => 'required|min:50',
        ]);
        product::create([
            'productname'      => \request('productname'),
            'category'      => \request('category'),
            'description'     => \request('description'),
        ]);
        return redirect()->route('product.show');
    }
}
