@extends('layouts.app')
@section('title')
    Edit Product
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><h3>Edit Product</h3>
                </div>
                <div class="card-body">
                   <form action="/home/updateProduct/{{$product->id}}" method="post">
                   @csrf
                   @method('PUT')
                   <input type="text" name = "productName" placeholder="Product Name" value="{{$product->productName}}">
                   <br>
                   <br>
                   <input type="text" name = "amount" placeholder="Amount/Price" value="{{$product->amount}}">
                   <br>
                   <br>
                   <input type="text" name="stock" placeholder="Stock" value="{{$product->stock}}">
                   <br>
                   <br>
                   <button class="btn btn-primary">Edit Product</button>
                   <a href="/home" class="btn btn-secondary">Cancel</a> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
