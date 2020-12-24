@extends ('layouts/authapp')


@section('content')
<h1>Add product panel :</h1>

{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\ProductsController@store']) !!}
{{ csrf_field() }}

<div class="form-group col-md-2">

    <div class="form-group col-sm">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    {!! Form::label('productcode', 'Product Code')!!}
    {!! Form::text('productcode', null, ['class' => 'form-control'])!!}

    {!! Form::label('description', 'Description')!!}
    {!! Form::text('description', null, ['class' => 'form-control'])!!}

    {!! Form::label('indate', 'Date')!!}
    {!! Form::text('indate', null, ['class' => 'form-control'])!!}

    {!! Form::label('quantityonhand', 'Quantity to Insert')!!}
    {!! Form::text('quantityonhand', null, ['class' => 'form-control'])!!}

    {!! Form::label('price', 'Price')!!}
    {!! Form::text('price', null, ['class' => 'form-control'])!!}

    {!! Form::label('discount', 'Discount')!!}
    {!! Form::text('discount', null, ['class' => 'form-control'])!!}

    {!! Form::label('supplier', 'Supplier')!!}
    {!! Form::text('supplier', null, ['class' => 'form-control'])!!}
    
    {!! Form::submit('Add product', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection
