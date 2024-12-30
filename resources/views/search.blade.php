@extends('master')
@section('content')

<div class="row m-4">
    <div class="col-sm-4">
        
    </div>
    <div class="col-sm-4 ">
        <div class="container search-product">
            <div class="treanding-wrapper">
                    <h3>Searched Products</h3>
                    
                    @foreach ($products as $item)
                        <div class="search-item">
                            <a href="detail/{{ $item['id'] }}">
                            <img class="treanding-img" src="{{ asset($item['gallery']) }}" class="d-block mx-auto" alt="Product Image">
                            <div class="">
                                <h5>{{ $item['name'] ?? 'Product Name' }}</h5>
                            </div>
                            </a>
                            <h6>{{ $item['discription'] ?? 'Product discription' }}</h6>
                        </div>
                    @endforeach
                </div >
        </div>
    </div>
</div>

@endsection
