@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <h2>Product's Details</h2>
    </div>
    <div class="col-lg-2">
        <a class="btn btn-success" href="{{ route('product.index') }}"><i class="fas fa-backspace"></i> Back To Home</a>
    </div>
</div>

   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                $ {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
