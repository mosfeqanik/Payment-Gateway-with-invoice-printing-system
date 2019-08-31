@extends('layouts.master')
@section('title','registration')

@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form action="{{route('register.user')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required="required">
                            <label for="inputName">Name</label>
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
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" name="password_confirmation" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                    <label for="confirmPassword">Confirm password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <input name="submit" type="submit" class="btn btn-primary btn-block mt-2" value="Registration">
                    </div>
                </form>
                <div class="text-center">
                    <a class="btn btn-success btn-block mt-2" href="{{route('login.show')}}">login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
