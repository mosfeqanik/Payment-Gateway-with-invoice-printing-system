@extends('layouts.master')
@section('title','Customer registration')
@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card-header mt-5">
            <i class="fas fa-table"></i>
            My Customers</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customername</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Customername</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->customername}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{ Carbon\Carbon::parse($customer->created_at)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Customer Account</div>
            <div class="card-body">
                <form action="{{route('customer.register')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="customername" id="inputName" class="form-control" placeholder="Customer Name" required="required">
                            <label for="inputName">Customer Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Address" required="required">
                            <label for="inputAddress">Address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <input class="btn btn-primary btn-block" type="submit" name="submit" value="Save" >
                </form>
            </div>
        </div>
    </div>
@endsection
