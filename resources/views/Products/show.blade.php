@extends ('layouts/authapp')



@section('content')

<h2> The product's information are :</h2>

<ul>
    <li>Code : {{$products->productcode}}</li>
    <li>Description : {{$products->description}}</li>
    <li>Price : {{$products->price}}</li>
    <li>Indate : {{$products->indate}}</li>
    <li>QuandityAvailable : {{$products->quantityonhand}}</li>
    <li>Actual discount: {{$products->discount}}</li>
    <li>Supplier : {{$products->supplier}}</li>
</ul>

<a href="{{route('products.edit',$products->productcode)}}">Edit the product</a>
<a href="{{route('products.addOrder',$products->productcode)}}">Buy the product</a>






@endsection

