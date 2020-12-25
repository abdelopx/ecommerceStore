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
<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="http://localhost/MyStore/public/images/logo.png" width="75px">
        </div>
        <nav>
            <ul>
                <li><a href="http://localhost/MyStore/public/homePage">Home</a></li>
                <li><a href="http://localhost/MyStore/public/products/allProducts">Products</a></li>
                <li><a>About</a></li>
                <li><a href="http://localhost/MyStore/public/login">Login</a></li>
                <li><a href="http://localhost/MyStore/public/register">Register</a></li>
                <li><a href="{{ route('login') }}">Account</a></li>
            </ul>
        </nav>
        <img src="http://localhost/MyStore/public/images/cart.png" width="30px" height="30px">

    </div>
    <div class="row">
        <div class="col-2">
            <h1>Buy <br>electronic and tech material</h1>
            <p>The website that sells computers, <br>at the best PRICE !</p>
            <a class="btn">Explore now ! &#8594;</a>
        </div>
        <div class="col-2">
            <img src="http://localhost/MyStore/public/images/home-image.png">
        </div>
    </div>
</div>
</div>

     <!--------- featured categories------------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="row-3">
                <img src="">
            </div>
            <div class="row-3"><img src="http://localhost/MyStore/public/images/category-1.png"></div>
            <div class="row-3"><img src="http://localhost/MyStore/public/images/category-2.png"></div>
            <div class="row-3"><img src="http://localhost/MyStore/public/images/category-3.png"></div>

        </div>
    </div>
</div>
<!--------- featured categories------------->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-1.jpg"><h4>Acer Laptop</h4>
        <p>4999 DHS</p>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
    </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-2.jpg"><h4>Asus Zenbook Laptop</h4>
            <p>8999 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-3.jpg"><h4>Screen Desktop</h4>
            <p>1599 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-4.jpg"><h4>Mouse</h4>
            <p>699 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-5.jpg"><h4>Macbook Pro 13" 2020</h4>
            <p>4999 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-6.jpg"><h4>Ryzen CPU</h4>
            <p>8999 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-7.jpg"><h4>HyperX RAM Sticks</h4>
            <p>1599 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-8.jpg"><h4>Hp 17</h4>
            <p>699 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-9.jpg"><h4>ASUS P1503DA</h4>
            <p>4999 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-10.jpg"><h4>ASUS ExpertBook</h4>
            <p>8999 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-11.jpg"><h4>ASUS Chromebook Flip 14</h4>
            <p>1599 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="col-4"><img src="http://localhost/MyStore/public/images/product-12.jpg"><h4>DELL XPS 13 9370</h4>
            <p>699 DHS</p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    </div>

</div>

<!----------Offer------->
<div class="offer">
    <h2 class="title">Exclusive offer</h2>
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img class="offer-img" src="http://localhost/MyStore/public/images/Offer.jpg">
            </div>

            <div class="col-2">
                <h2 class="offer-h">We will build your own customisable computer !</h2>
                <a class="btn offer-btn" >Coming Soon ... </a>
            </div>
        </div>
    </div>

</div>

<!------- Brands------------>
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5"><img src="http://localhost/MyStore/public/images/logo-1.png"></div>
            <div class="col-5"><img src="http://localhost/MyStore/public/images/logo-2.png"></div>
            <div class="col-5"><img src="http://localhost/MyStore/public/images/logo-3.png"></div>
            <div class="col-5"><img src="http://localhost/MyStore/public/images/logo-4.png"></div>
        </div>
        </div>
</div>
</div>

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
