@extends('master')
@section('content')

<div class="row m-4">
    
    <div class="col-sm-10 ">
        <div class="container search-product">
            <div class="treanding-wrapper">
                    <h2 class="mb-3" style="border-bottom: 1px solid grey;">Orders List</h2>
                    
                    @foreach ($orders as $item)
                        <div class="row search-item cart-list-devider" >
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="treanding-img" src="{{ asset($item->gallery) }}" class="d-block mx-auto" alt="Product Image">
                                    </a>
                            </div>
                            <div class="col-sm-3">
                                
                                    <div class="">
                                        <h5>{{ $item->name ?? 'Product Name' }}</h5>
                                    <h6>Delivery Status : {{ $item->status?? 'Product discription' }}</h6>
                                    <h6>Payment Status : {{ $item->payment_status?? 'Product discription' }}</h6>
                                    <h6>Payment Method : {{ $item->payment_method?? 'Product discription' }}</h6>
                                    <h6>Delivery Address : {{ $item->address?? 'Product discription' }}</h6>
                                    <h6>Price : {{ $item->price?? 'Product discription' }}</h6>
                                    </div>        
                            </div>
                            <div class="col-sm-3 mt-4">
                                {{-- <a href="/removecart/{{ $item->cart_id }}">
                                    <button class="btn btn-danger">
                                        Remove From Cart
                                    </button>
                                </a> --}}
                                
                            </div>
                        </div>
                    @endforeach
                    {{-- <a class="btn btn-success" style="margin-left: 510px;" href="/ordernow">Order Now</a><br><br> --}}
                </div >
        </div>
    </div>
</div>

@endsection
