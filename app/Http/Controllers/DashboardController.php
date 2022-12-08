<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use App\Model\Invoices;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $invoice = Invoices::latest()->paginate(5);
      
        $pending = Invoices::where('status','pending')->count();
        $success = Invoices::where('status','success')->count();
        $expired = Invoices::where('status','expired')->count();
        $failed = Invoices::where('status','failed')->count();


        return view('admin.index',compact('invoice','pending','success','expired','failed'));

       
        
    }
}
