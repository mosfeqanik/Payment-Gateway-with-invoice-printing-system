@extends('layouts.master')
@section('title','Invoice Registration')
@push('css')
    <style type="text/css">
        .date{
            width: 175px;
            height: 40px;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        @include('errors.error')
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Invoice Details</div>
            <form action="{{route('invoice.create')}}" method="post">
                {{csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                        <div class="form-label-group">
                            <h6 >Customer</h6>
                            @foreach($customers as $customer )
                            <select name="customername">
                                <option value="{{$customer->customername}}">{{$customer->customername}}</option>
                            </select>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <h6 >Currency</h6>
                            <select name="currency" id="currency">
                                <option value="dollar">Dollar</option>
                                <option value="euros">Euros</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <h6 >Date</h6>
                            <input type="date" name="date" id="date" class="form-control date" required>
                        </div>
                    </div>
            </div>
        </div>
        <div class="table bg-white">
            <div class="contrainer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>item Code</th>
                                        <th>item Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Discount %</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>item Code</th>
                                        <th>item Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Discount %</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" name="description" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" name="quantity" class="form-control mat">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" name="unitprice" class="form-control mat">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" name="discount" class="form-control mat">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control mat" name="total">
                                        </td>
                                        <th>
                                            <button type="submit" class="btn btn-primary btn-block" name="submit">
                                                <i class="fas fa-check-square"></i>
                                            </button>
                                        </th>
                                        </form>
                                    </tr>
                                    @foreach($invoices as $invoice)
                                    <tr>
                                        <td>{{$invoice->id}}</td>
                                        <td>{{$invoice->description}}</td>
                                        <td>{{$invoice->quantity}}</td>
                                        <td>{{$invoice->unitprice}}</td>
                                        <td>{{$invoice->discount}}</td>
                                        <td>{{$invoice->total}}</td>
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
    </div>
@endsection
@push('js')
{{--    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>--}}
    <script>
        $('.form-group').on('input','mat',function () {
            var totalsum =0;
            $('.form-group .mat').each(function () {
                var inputVal =$(this).val();
                if ($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('result').text(totalsum);
        });
    </script>
@endpush
