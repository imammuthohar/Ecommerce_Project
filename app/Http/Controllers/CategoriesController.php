<?php

namespace App\Http\Controllers;

// use App\Models\Categories;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    // untuk auth
   public function __construct()
   {
       $this->middleware('auth');
   }



   public function index() 
   {
    $category = Category::latest()->paginate(3);
    
    return view('admin.categories',compact('category'));

   }

   public function create()
   {
       return view('admin.createcategory');
   }

   public function store(Request $request)
   {
       //validate form
       $this->validate($request, [
           'name'     => 'required|min:2',
           'slug'   => 'required|min:2',
           'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'


       ]);

       //upload image
       $image = $request->file('image');
       $image->storeAs('public/img', $image->hashName());

       //create data kategori
       Category::create([
           'name'      => $request->name,
           'slug'      => $request->slug,
           'image'     => $image->hashName()
       ]);

       //redirect to index
       return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Disimpan!']);
   }

   
   public function destroy(Category $category)
   {
    


        //delete image
        Storage::delete('public/img/'. $category->image);

        //delete data kategori
        $category->delete();

       return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
   }


   public function edit (Category $category) {
    return view('admin.editcategory',compact('category'));
   }

   public function update(Request $request,Category $category) {
  
     //proses validasi formulir
     $this->validate($request, [
        'name'  => 'required|min:2',
        'slug'  => 'required|min:2',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    // dd($request);
    

    //check if image is uploaded
    if ($request->hasFile('image')) {

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/img', $image->hashName());

        //delete old image
        Storage::delete('public/img/'.$category->image);

        //update kategory with new image
        $category->update([
            'name'      => $request->name,
           'slug'      => $request->slug,
           'image'     => $image->hashName()
        ]);
      
    } else {
      
        //update kategory without image
        $category->update([
        'name'      => $request->name,
        'slug'      => $request->slug
        ]);
    }

        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil di Update!']);
   }
   
   

}
