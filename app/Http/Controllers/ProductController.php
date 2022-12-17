<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index () {


        $category   = Category::latest()->paginate();
        $katakunci=request('search');
        if($katakunci){
         $product = Product::where( 'title', 'LIKE', '%' . $katakunci . '%' )->paginate(3);
              }  else {
                $product = Product::latest()->paginate(3);
              } 
        return view('admin.product',compact('product','category'));
    }


    public function create() {
        $user       = User::latest()->paginate();
        $category   = Category::latest()->paginate();
        return view('admin.createproduct',compact('user','category'));
    }

    public function store(Request $request)
   {
    // dd($request);
        // validate form
   

       //upload image
       $image = $request->file('image');
       $image->storeAs('public/img', $image->hashName());

       //create data product
       Product::create([
        'image'          => $image->hashName(), 
         'title'         => $request->namaproduk,
         'slug'          => $request->slug,
         'category_id'   => $request->category,
         'user_id'       => $request->user_id,
         'description'   => $request->description,
         'weight'        => $request->weight,
         'price'         => $request->price,
         'stock'         => $request->stock,
         'discount'      => $request->discount   
                  
    ]);
       //redirect to index
       return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
    //    
   }


   public function destroy(Product $product)
   {
    
        //delete image
        Storage::delete('public/img/'. $product->image);

        //delete data kategori
        $product->delete();

       return redirect()->route('product.index')->with(['success' => 'Data Berhasil Dihapus!']);
   }

public function edit(Request $request, Product $product,Category $category) {

    $category   = Category::latest()->paginate();
    return view('admin.editproduct',compact('product','category'));
}

public function update(Request $request, Product $product) {

    //check if image is uploaded
    if ($request->hasFile('image')) {

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/img', $image->hashName());

        //delete old image
        Storage::delete('public/img/'.$category->image);
        //update kategory with new image
        $product->update([

            'image'          => $image->hashName(), 
             'title'         => $request->namaproduk,
             'slug'          => $request->slug,
             'category_id'   => $request->category,
             'user_id'       => $request->user_id,
             'description'   => $request->description,
             'weight'        => $request->weight,
             'price'         => $request->price,
             'stock'         => $request->stock,
             'discount'      => $request->discount 




        ]);
      
    } else {
      
        //update kategory without image
        $product->update([
            'title'         => $request->namaproduk,
            'slug'          => $request->slug,
            'category_id'   => $request->category,
            'user_id'       => $request->user_id,
            'description'   => $request->description,
            'weight'        => $request->weight,
            'price'         => $request->price,
            'stock'         => $request->stock,
            'discount'      => $request->discount 
        ]);
    }

        return redirect()->route('product.index')->with(['success' => 'Data Berhasil di Update!']);
}

}
