@extends('layouts.app')

@section('title')
    Add product
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><h3>Add Product</h3></div>
                <div class="card-body">
                   <form action="/home/addProduct/confirmed" method="post">
                   @csrf
                   <input type="text" name = "productName" placeholder="Product Name">
                   <br>
                   @error('productName')
                    {{ $message }}
                   @enderror
                   <br>
                   <input type="text" name = "amount" placeholder="Amount/Price">
                   <br>
                   @error('amount')
                   {{ $message }}
                   @enderror
                   <br>
                   <input type="text" name="stock" placeholder="Stock">
                   <br>
                   @error('stock')
                   {{ $message }}
                   @enderror
                   <br>
                   <button class="btn btn-primary">Add Product</button>
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
