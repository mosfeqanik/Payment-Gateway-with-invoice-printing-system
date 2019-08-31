@extends('layouts.master')
@section('title','login')

@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{route('user.login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>
                    <input name="submit" type="submit" class="btn btn-primary btn-block"  value="Login">
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{route('register.show')}}">Register an Account</a>
                </div>
            </div>
        </div>
    </div>
@endsection
