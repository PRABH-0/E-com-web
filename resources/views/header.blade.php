<?php
use App\Http\Controllers\UserController;

$cartCount = 0;

if (Session::has('user')) {
    $userController = new UserController();
    $cartCount = $userController->showCart(); // Call the method on the instance
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">E-com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left Navigation Links -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myorder">Orders</a>
                </li>
            </ul>
            <!-- Search Bar in the Middle -->
            <form action="/search" class="d-flex mx-auto" style="width: 40%;">
                <input class="form-control me-2 " name="query" type="search" placeholder="Search products" aria-label="Search">
                <button class="btn btn-outline-success mx-1" type="submit">Search</button>
            </form>
            <!-- Right Navigation Links -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    {{-- <a class="nav-link" href="cart"> Cart ({{ $cartCount ?? 0 }})</a> --}}
                    <a class="nav-link" href="cartlist"> Cart Item({{ $cartCount ?? 0 }})</a>
                </li>
                @if (Session::has('user'))
                <li class="navbar dropdown" >
                    <a class="dropdown-toggle" style="color: white" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] ?? 'User' }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" style="color: white">
                        <li><a href="/logout" style="color: black">LogOut</a></li>
                @else
                <li>
                    <a href="/login" class="navbar" style="color: White">

                    Login
                </a>
            

            </li>
                @endif

                    </ul>
                    
                </li>
            </ul>
        </div>
    </div>
</nav>
