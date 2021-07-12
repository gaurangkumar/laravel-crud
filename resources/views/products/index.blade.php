@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <h2>All Products</h2>
    </div>
    <div class="col-lg-2">
        <a class="btn btn-success" href="{{ route('product.create') }}">Create New Product</a>
    </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="text-white bg-primary">
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </thead>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>$ {{ $product->price }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info text-white" href="{{ route('product.show',$product->id) }}"><i class="fas fa-eye"></i> Show</a>
    
                    <a class="btn btn-primary text-white" href="{{ route('product.edit',$product->id) }}"><i class="fas fa-edit"></i> Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger text-white"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection