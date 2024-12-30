@extends('master')
@section('content')
<div class="container custom-login mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-secondary text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form action="login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-secondary btn-block">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Don't have an account? <a href="/register" class="text-primary">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection