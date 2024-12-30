@extends('master')
@section('content')

<div class="row m-4">
    
    <div class="col-sm-10 ">
        <div class="container search-product">
            <div class="treanding-wrapper">
                    <h2 class="mb-3" style="border-bottom: 1px solid grey;">Cart List</h2>
                    
                    @foreach ($products as $item)
                        <div class="row search-item cart-list-devider" style="height: 150px;">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="treanding-img" src="{{ asset($item->gallery) }}" class="d-block mx-auto" alt="Product Image">
                                    </a>
                            </div>
                            <div class="col-sm-3">
                                
                                    <div class="">
                                        <h5>{{ $item->name ?? 'Product Name' }}</h5>
                                    <h6>{{ $item->discription?? 'Product discription' }}</h6>
                                    <h4>Price :{{ $item->price?? 'price unkow' }}</h4>
                                    </div>        
                            </div>
                            <div class="col-sm-3 mt-4">
                                <a href="/removecart/{{ $item->cart_id }}">
                                    <button class="btn btn-danger">
                                        Remove From Cart
                                    </button>
                                </a>
                                
                            </div>
                        </div>
                    @endforeach
                    <a class="btn btn-success" style="margin-left: 510px;" href="/ordernow">Order Now</a><br><br>
                </div >
        </div>
    </div>
</div>

@endsection
