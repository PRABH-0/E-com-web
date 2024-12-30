@extends('master')
@section('content')

<div class="container detail">
    <div class="row my-3">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt=""><br>
            <button  class="btn btn-secondary m-2">
                <a style="color: white" href="/">Go Home</a>
            </button>
        </div>
        <div class="col-sm-6">
            
            <h2>Name : {{ $product['name'] }}</h2>
            <h4>Price : {{ $product['price'] }}</h4>
            <h4>Category : {{ $product['Category'] }}</h4>
            <h4>Discription : {{ $product['discription'] }}</h4>
            <br><br>
            {{-- <form action="addToCart" method="post"> --}}
                <form action="{{ url('addToCart') }}" method="post">

                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="btn btn-success my-1">Add to Cart</button>
            </form>            
            {{-- <button class="btn btn-primary"><a href="/ordernow" style="color: white">Buy Now</a></button> --}}
        </div>
    </div>

</div>
@endsection
