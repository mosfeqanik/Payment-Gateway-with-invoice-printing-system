<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function index(){
       $customers=Customer::latest()->get();
       return view('customer.CreateCustomer',compact('customers'));
   }
   public function register(Request $request){

       $this->validate(\request(),[
           'customername'  => 'required|min:4',
           'address'  => 'required|min:4',
           'email'  => 'required|min:10',
       ]);
       Customer::create([
           'customername'      => \request('customername'),
           'address'      => \request('address'),
           'email'     => \request('email'),
       ]);
       return redirect()->route('customer.show');
   }
}
