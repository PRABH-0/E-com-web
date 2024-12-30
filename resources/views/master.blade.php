<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="master_body">
    {{ View::make('header') }}
    <div  style="height: 1000px;">
        @yield('content')
    </div>
    <div class="">
        {{ View::make('footer') }}

    </div>


</body>
<style>
    .custom-login{
        height: 500px;
        padding-top:10px; 
    }
    /* Center the image in the carousel */
.slider-img {
    max-height: 400px; /* Adjust to your desired height */
    width: auto;
    margin: 0 auto;
}

/* Position the controls at the edges of the screen */
.control-custom {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
}

.carousel-control-prev {
    left: 0; /* Aligns the left control to the edge of the screen */
}

.carousel-control-next {
    right: 0; /* Aligns the right control to the edge of the screen */
}

/* Customize carousel control icons */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: gray; /* Set the icon background color to gray */
    border-radius: 50%; /* Optional: Make the icons circular */
    width: 40px; /* Adjust size as needed */
    height: 40px;
}

/* Optional: Add hover effect */
.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: darkgray; /* Darker gray on hover */
}
.slider-text{
    background-color: #24465454 ;
}
.treanding-img{
    height: 100px;
}
.treanding-item{
    float: left;
    width: 20%;
}
.treanding-wrapper{
    height: 300px;
    margin: 20px;
}
.detail-img{
    height: 200px;
}
.detail{
    height: 500px
}
.search-product {
    height:500px;
}
.cart-list-devider{
    border-bottom: 1px solid grey;
    margin-bottom:20px;
    padding-bottom: 20px;
}
.footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
}
body {
            display: flex;
            flex-direction: column;
}


</style>

</html>