@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ProductCode:</strong>
                    <input type="text" name="ProductCode" class="form-control" placeholder="Product Code">
                </div>
                <div class="form-group">
                    <strong>ProductName:</strong>
                    <input type="text" name="ProductName" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="Description" placeholder="Enter Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <strong>Color:</strong>
                <input type="qtext" name="Color" class="form-control" placeholder="Color">
            </div>
            <div class="form-group">
                <strong>Size:</strong>
                <input type="text" name="Size" class="form-control" placeholder="Size">
            </div>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="Price" class="form-control" placeholder="Price">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection