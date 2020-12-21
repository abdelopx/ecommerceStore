@extends ('layouts/app')

@section('content')

<h1>Edit Page</h1>

<div class="form-group col-md-2">
{!! Form::model($products, ['method'=>'PATCH' ,'action' => ['App\Http\Controllers\ProductsController@update', $products->productcode]]) !!}
{{ csrf_field() }}

    {!! Form::label('productcode', 'Product Code')!!}
    {!! Form::text('productcode', $products->productcode, ['class' => 'form-control'])!!}

    {!! Form::label('description', 'Description')!!}
    {!! Form::text('description', $products->description, ['class' => 'form-control'])!!}

    {!! Form::label('indate', 'Date')!!}
    {!! Form::text('indate', $products->indate, ['class' => 'form-control'])!!}

    {!! Form::label('quantityonhand', 'Quantity to Insert')!!}
    {!! Form::text('quantityonhand', $products->quantityonhand, ['class' => 'form-control'])!!}

    {!! Form::label('price', 'Price')!!}
    {!! Form::text('price', $products->price, ['class' => 'form-control'])!!}

    {!! Form::label('discount', 'Discount')!!}
    {!! Form::text('discount', $products->discount, ['class' => 'form-control'])!!}

    {!! Form::label('supplier', 'Supplier')!!}
    {!! Form::text('supplier', $products->supplier, ['class' => 'form-control'])!!}

    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}

    


{!! Form::close() !!}

{!! Form::model($products,['method'=>'DELETE','action'=>['App\Http\Controllers\ProductsController@update', $products->productcode]]) !!}

{{ csrf_field() }}
{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}
</div>





@endsection
