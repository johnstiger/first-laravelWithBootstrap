<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all();
        return view('home', compact("product"));
    }
    public function Product()
    {   
        return view('addProduct');
    }
    public function addProduct(Request $req)
    {
        $req->validate([
            'productName'=>'required',
            'amount' => 'required',
            'stock' => 'required'
        ],[
            'productName.required' => 'Please Enter Product Name',
            'amount.required' => 'Please Enter Amount',
            'stock.required' => 'Please Enter Stock'
        ]);
        $product = new Product();
        $product->productName = $req->productName;
        $product->amount = $req->amount;
        $product->stock = $req->stock;
        $product->save();
        return redirect('home');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('editProduct',compact("product"));
    }
    public function updateProduct(Request $req, $id)
    {
        $product = Product::find($id);
        $product->productName = $req->productName;
        $product->amount = $req->amount;
        $product->stock = $req->stock;
        $product->save();
        return redirect('home');
    }
    public function destroy($id){
            Product::destroy($id);
            return redirect('home');
    }
}
