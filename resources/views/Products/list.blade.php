@extends ('layouts/app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/MyStore/resources/css/home.css">
    <title>Store</title>
</head>
<body>

<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="http://localhost/MyStore/public/images/logo.png" width="75px">
        </div>
        <nav>
            <ul>
                <li><a href="http://localhost/MyStore/public/homePage">Home</a></li>
                <li><a href="http://localhost/MyStore/public/products">Products</a></li>
                <li><a>About</a></li>
                <li><a href="http://localhost/MyStore/public/login">Login</a></li>
                <li><a href="http://localhost/MyStore/public/register">Register</a></li>
                <li><a href="{{ route('login') }}">Account</a></li>
            </ul>
        </nav>
        <img src="http://localhost/MyStore/public/images/cart.png" width="30px" height="30px">

    </div>
  </div>


     <!--------- featured categories------------->

<!--------- featured categories------------->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        @foreach($products as $product)
        <div class="col-4"> <a href="{{route('products.singleProduct',$product->productcode)}}"><img src="http://localhost/MyStore/public/images/{{$product->path}}"><h4>{{$product->description}}</h4></a><p>{{$product->price}}</p></div>
    @endforeach      
    </div>
    <h2>{{ $products->links() }}</h2>
    
</div>

<!----------Offer------->


<!------- Brands------------>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1"><h3>Download Our App (Coming Soon)</h3>
            <p>Will be avaiblable for Android and IOS Devices !</p>
            <div class="app-logo">
                <i class="fa fa-apple"></i>
                <i class="fa fa-android"></i>
            </div></div>
            <div class="footer-col-2"><img src="http://localhost/MyStore/public/images/logo.png">
                <p>Our purpose is to make tech materials available and affordable for everyone. </p></div>
            <div class="footer-col-3"><h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Instagram Page</li>
                    <li>Return Policy</li>
                    <li>Contact Us</li>
                </ul></div>
        </div>

    </div>

</div>
</body>
</html>


@endsection
