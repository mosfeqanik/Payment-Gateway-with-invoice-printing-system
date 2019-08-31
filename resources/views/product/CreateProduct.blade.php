@extends('layouts.master')
@section('title','Product registration')
@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card-header mt-5">
            <i class="fas fa-table"></i>
            My Products</div>
        <div class="card-body border border-secondary">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->productname}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{ Carbon\Carbon::parse($product->created_at)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Product Details</div>
            <div class="card-body">
                <form action="{{route('product.create')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="productname" id="inputName" class="form-control" placeholder="Product Name" required>
                            <label for="inputName">Product Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <select type="text" name="category" id="inputCategory" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <label for="inputCategory">Category</label>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <textarea name="description" id="inputDescription" class="form-control" placeholder="Description" required></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection
