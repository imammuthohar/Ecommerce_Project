<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index ()
    {
        $katakunci=request('search');
        if($katakunci){
         $customer = Customer::where( 'name', 'LIKE', '%' . $katakunci . '%' )->paginate(3);
              }  else {
                $customer = Customer::latest()->paginate(3);
              } 

 
         
        return view('admin.customer',compact('customer'));
    }

    public function destroy(Customer $customer) {

         //delete image
         Storage::delete('public/img/'. $customer->image);

         //delete data kategori
         $customer->delete();
        return redirect()->route('customer.index')->with(['success' => 'Data Berhasil Dihapus!']);


    }
}
