<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Collection;

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

        $invoice = Invoices::latest()->paginate(100);

        $pending = Invoices::where('status','pending')->count();
        $success = Invoices::where('status','success')->count();
        $expired = Invoices::where('status','expired')->count();
        $failed = Invoices::where('status','failed')->count();
        
        //yearth
        $year   = date('Y');

        // //chart 
        // $transactions = DB::table('invoices')
        //     ->addSelect(DB::raw('SUM(grand_total) as grand_total'))
        //     ->addSelect(DB::raw('MONTH(created_at) as month'))
        //     // ->addSelect(DB::raw('MONTHNAME(created_at) as month_name'))
        //     ->addSelect(DB::raw('YEAR(created_at) as year'))
        //     ->whereYear('created_at', '=', $year)
        //     ->where('status', 'success')
        //     ->groupBy('month')
        //     // ->groupBy(DB::raw("Month(created_at)"))
        //     // ->orderByRaw('month ASC')
        //     ->get();
        //     dd($transactions);
        // if(count($transactions)) {
        //     foreach ($transactions as $result) {
        //         $month_name[]    = $result->month_name;
        //         $grand_total[]   = (int)$result->grand_total;
        //     }
        // }else {
        //     $month_name[]   = "";
        //     $grand_total[]  = "";
        // } 

        // //response 
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Statistik Data',  
        //     'data'    => [
        //         'count' => [
        //             'pending'   => $pending,
        //             'success'   => $success,
        //             'expired'   => $expired,
        //             'failed'    => $failed
        //         ],
        //         'chart' => [
        //             'month_name'    => $month_name,
        //             'grand_total'   => $grand_total
        //         ]
        //     ]  
        // ], 200); 
        
        return view('admin.index',compact('invoice','pending','success','expired','failed'));

       
        
    }
}
