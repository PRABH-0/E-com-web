@extends('master')
@section('content')

<div class="container custom-product">
    
        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                @foreach ($products as $index => $item)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner text-center">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="slider-img" src="{{ asset($item['gallery']) }}" class="d-block mx-auto" alt="Product Image">
                            <div class="carousel-caption slider-text">
                                <h5 style="color: rgb(145, 145, 145)">{{ $item['name'] ?? 'Product Name' }}</h5>
                                <p style="color: rgb(39, 38, 38)">{{ $item['discription'] ?? 'No description available.' }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div >

            <!-- Carousel Controls -->
            <a class="carousel-control-prev control-custom" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next control-custom" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    
        <div class="treanding-wrapper">
            <h1>Trending Products</h1>
            
            @foreach ($products as $item)
                <div class="treanding-item">
                    <a href="detail/{{ $item['id'] }}">
                    <img class="treanding-img" src="{{ asset($item['gallery']) }}" class="d-block mx-auto" alt="Product Image">
                    <div class="">
                        <h5>{{ $item['name'] ?? 'Product Name' }}</h5>
                    </div>
                    </a>
                </div>
            @endforeach
        </div >
</div>

@endsection
