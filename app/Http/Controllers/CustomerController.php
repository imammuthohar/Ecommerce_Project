<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index ()
    {
        $customer = Customer::latest()->paginate(4);
        return view('admin.customer',compact('customer'));
    }
}
