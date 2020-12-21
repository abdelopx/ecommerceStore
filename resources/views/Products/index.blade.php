@extends ('layouts/app')

@section('content')

<h1>All the products available in stock</h1>
<ul>
    
    @foreach($products as $product)
        <li> <a href="{{route('products.show',$product->productcode)}}">{{$product->description}}</a></li>
    @endforeach

</ul>

<a class="btn btn-primary" href="{{route('products.create')}}" role="button">Add a new product</a>
@endsection



