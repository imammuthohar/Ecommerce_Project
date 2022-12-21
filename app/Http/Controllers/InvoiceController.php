<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // untuk auth
   public function __construct()
   {
       $this->middleware('auth');
   }
}
