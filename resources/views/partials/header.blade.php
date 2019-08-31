<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Payment system</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customer.show')}}">Create Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.show')}}">Create Product Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('invoice.show')}}">Create Invoice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('invoices.all')}}">Invoices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login.show')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register.show')}}">Registration</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
