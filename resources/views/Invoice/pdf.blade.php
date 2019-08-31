<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Ref</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Customer order ref</th>
                            <th>order Date</th>
                            <th>Requied by</th>
                            <th>delivery to</th>
                            <th>order total</th>
                            <th>Due </th>
                            <th>Currency </th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Invoice</th>
                            <th>Ref</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Customer order ref</th>
                            <th>order Date</th>
                            <th>Requied by</th>
                            <th>delivery to</th>
                            <th>order total</th>
                            <th>Due </th>
                            <th>Currency </th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>{{$invoice->id}}</td>
                            <td>Auto</td>
                            <td>{{$invoice->customername}}</td>
                            <td></td>
                            <td></td>
                            <td>{{ Carbon\Carbon::parse($invoice->created_at)->format('d-m-Y') }}</td>
                            <td>{{ Carbon\Carbon::parse( $invoice->updated_at)->addDays(3)->format('d-m-Y')}}</td>
                            <td>{{$invoice->customername}}</td>
                            <td>{{$invoice->total}}</td>
                            <td>{{$invoice->total}}</td>
                            <td>{{$invoice->currency}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

