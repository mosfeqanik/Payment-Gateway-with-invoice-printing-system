@extends('layouts.master')

@section('title','InvoiceDetails')
@section('content')
    <div class="table bg-white">
        <div class="contrainer">
            @include('errors.error')
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
                                    <th>Actions</th>
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
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($invoices as $invoice)
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
                                        <th><a href="{{route('invoice.pdfexport',$invoice->id)}}" class="btn btn-outline-success btn-block">
                                                <i class="fas fa-print"></i>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
