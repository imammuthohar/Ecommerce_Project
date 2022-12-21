<?php

namespace App\Http\Controllers;

use validator;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
        // redirect
        public function __construct()
            {
                $this->middleware('auth');
         }

    public function index() {

        $user   = User::latest()->paginate(1);
        $katakunci=request('search');
        if($katakunci){
         $user = User::where( 'name', 'LIKE', '%' . $katakunci . '%' )->paginate(1);
              }  else {
                $user = User::latest()->paginate(3);
              } 
              return view('admin.user',compact('user'));


       
    }

    public function create() {
        return view('admin.createuser');
    }


    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'name'                => 'required|min:2',
            'email'               => 'required|min:2',
            'password'            => 'required|min:8',
            'confirmpassword'     => 'required|min:8'
            
 
        ]);
 
       
 
        //create data kategori
        User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make('password'), 
            'remember_token'    => $request->confirmpassword     
        ]);
 
        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(User $user){
        return view('admin.edituser',compact('user'));

    }


    public function update(Request $request, User $user)
    {
            //validate form
        $this->validate($request, [
            'name'                => 'required|min:2',
            'email'               => 'required|min:2',
            'password'            => 'required|min:8',
            'confirmpassword'     => 'required|min:8'
            
 
        ]);

        $user->update([

            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make('password'), 
            'remember_token'    => $request->confirmpassword 


       ]);

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diupdate!']);


    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
