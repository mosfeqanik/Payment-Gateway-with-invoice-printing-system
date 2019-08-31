<?php

namespace App\Http\Controllers;

use App\Customer;
use App\invoice;
use Barryvdh\DomPDF\Facade as PDF;
use http\Encoding\Stream;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $customers=Customer::latest()->get();
        $invoices=invoice::latest()->get();
        return view('Invoice.CreateInvoice',compact('customers','invoices'));
    }
    public function create(){
        $this->validate(\request(),[
            'customername'  => 'required|min:4',
            'currency'  => 'required|min:4',
            'description'  => 'required|min:10',
            'quantity'  => 'required|min:1',
            'unitprice'  => 'required|min:1',
            'discount'  => 'required|min:1',
            'total'  => 'required|min:1',

        ]);
        invoice::create([
            'customername'      => \request('customername'),
            'currency'          => \request('currency'),
            'description'       => \request('description'),
            'quantity'          => \request('quantity'),
            'unitprice'         => \request('unitprice'),
            'discount'          => \request('discount'),
            'total'             => \request('total')
        ]);
        return redirect()->route('invoice.show');
    }
    public function show(){
        $invoices=invoice::latest()->get();
        return view('Invoice.invoiceDetails',compact('invoices'));
    }
    public function pdfexport($id){
        $invoice=invoice::find($id);
        $pdf = PDF::loadView('invoice.pdf',['invoice'=>$invoice])->setPaper('a4','portrait');
        $filename=$invoice->customername;
//        return $pdf->download('invoice.pdf');
        return $pdf->stream($filename.'.pdf');
    }
}
