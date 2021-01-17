@extends('layouts.app')
@section('title')   
    Home Page
@endsection
@section('body')  
<a href="/" type="button" class="btn btn-primary">Home</a> 
@endsection
@section('content')
<table>
    <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Amount</th>
        <th>Stock</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
    @foreach($product as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->productName}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->stock}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
        <td>
            <a href="/home/editProduct/{{$item->id}}"><button class="btn btn-primary">Edit Product</button></a>
             <form action="/home/destroy/{{$item->id}}" method="post">
             @csrf
             @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete Product</button>
           </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="add">
<a href="/home/addProduct"><button class="btn btn-primary" style="margin: 20px;">Add New Product</button></a>
</div>
@endsection
