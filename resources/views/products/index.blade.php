@extends('products.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ITEWT - Final Exam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ProductID</th>
            <th>ProductCode</th>
            <th>ProductName</th>
            <th>Description</th>
            <th>Color</th>
            <th>Size</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->ProductCode }}</td>
            <td>{{ $product->ProductName }}</td>
            <td>{{ \Str::limit($product->Description, 100) }}</td>
            <td>{{ $product->Color }}</td>
            <td>{{ $product->Size }}</td>
            <td>{{ $product->Price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection