<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
            
    public function __construct()
            {
                $this->middleware('auth');
            }
            


        public function index () {

            $slider     = Slider::latest()->paginate();
            return view('admin.slider',compact('slider'));
        }

        public function create () {
            return view('admin.createslider');
        }


        public function store(Request $request)
        {
            //validate form
            // $this->validate($request, [
            //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //     'link'      => 'required|min:5'   
            // ]);
    
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/img', $image->hashName());
    
            //create post
            Slider::create([
                'image'     => $image->hashName(),
                'link'     => $request->link
            ]);
    
            //redirect to index
            return redirect()->route('slider.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }

        public function destroy(Slider $slider)
        {
             //delete image
             Storage::delete('public/img/'. $slider->image);
     
             //delete data kategori
             $slider->delete();
            return redirect()->route('slider.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }

        public function edit (Slider $slider) 
        {
            return view('admin.editslider', compact('slider'));
        }

public function update(Request $request, Slider $slider) {
                            // /proses validasi formulir
                    // $this->validate($request, [
                        
                    //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    //     'link'  => 'required|min:2'
                    // ]);

                
                    

                    //check if image is uploaded
                    if ($request->hasFile('image')) {

                        //upload new image
                        $image = $request->file('image');
                        $image->storeAs('public/img', $image->hashName());

                        //delete old image
                        Storage::delete('public/img/'.$slider->image);

                        //update kategory with new image
                        $slider->update([
                            'image'     => $image->hashName(),
                            'link'      => $request->link
                        ]);
                    
                    } else {
                    
                        //update kategory without image
                        $slider->update([
                        'link'      => $request->link
                        ]);
                    }



            return redirect()->route('slider.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }


}
