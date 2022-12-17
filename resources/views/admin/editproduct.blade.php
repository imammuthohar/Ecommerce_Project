@extends('layout.mainadmin')

@section('titlepage')
Edit Product
@endsection

@section('subtitlepage')
EditProduct page
@endsection

@section('konten')
{{-- categories content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Product</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}

         <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
          <div class="mb-3">
              <label for="formFile" class="form-label">GAMBAR</label>
              <input name="image" class="form-control" type="file" id="formFile">
            </div>
            
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input value=" {{ old('title', $product->title) }} " required name="namaproduk" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ketikkan nama product">

             <!-- error message untuk nama gambar -->
             @error('name')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
         @enderror
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Slug</label>
            <input value=" {{ old('slug', $product->slug) }} " name="slug" type="text" class="form-control" id="exampleFormControlInput1">
           </div>
          
          
           <div class="mb-3">
            <label  class="form-label">Category_id</label>
            {{-- <select class="form-control" name="category" id=""> --}}
                {{-- <option value=" {{ old('category_id', $product->title) }}  ">  {{ old('weight', $product->title) }} </option> --}}
              {{-- @foreach ($category as $kategory ) --}}
              {{-- <option value="{{ $kategory->category_id }}"> {{ $kategory->name }} </option> --}}
              {{-- @endforeach --}}

              <select class="form-control" name="category" >
                @foreach ($category as $kategory )
                {{-- <option selected value="{{ $kategory->id }}"> {{ $kategory->name }} </option> --}}

                <option class="form-control" value="{{ $kategory->id }}"
                  @if($kategory->id=="categories()->get->id") selected @endif> {{ $kategory->name }} </option>
                  
                  {{-- @if($kategory->name=="{{$kategory->name }}") selected @endif> {{ $kategory->name }} </option>
                  <option class="form-control" value="Islam"  @if ( $post ->agama=="Islam") selected @endif >Islam</option> --}}

                @endforeach
              </select>
            </select>
            
          </div>  
          
        
          <div class="mb-3">
            <label class="form-label">User_ID</label>
            <input name="user_id" type="text" value="{{ old('user_id', $product->user_id) }} "  class="form-control">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Weight</label>
            <input  value=" {{ old('weight', $product->weight) }} " required type="text" name="weight"  class="form-control" id="exampleFormControlTextarea1" rows="3" >

          </div>    

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">STOCK</label>
            <input value=" {{ old('weight', $product->stock) }}" required type="text" name="stock"  class="form-control" id="exampleFormControlTextarea1" rows="3">
          </div>  
          
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea required name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3"> 
                {{ old('description', $product->description) }}
            </textarea>

          </div>  

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Price</label>
            <input value=" {{ old('price', $product->price) }} " required type="text" name="price" class="form-control" id="exampleFormControlTextarea1" rows="3" >

          
          </div> 

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Discount</label>
            <input value=" {{ old('discount', $product->discount) }}" required type="text" name="discount"  class="form-control" id="exampleFormControlTextarea1" rows="3" >
    
          </div> 

          
              
          
          <br>  
          <div class="mb-3">
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Update </button>
            <button type="reset" class="btn btn-warning"> <i class="fa fa-refresh fa-spin fa-1x fa-fw"> </i> Reset </button>
          </div>
         </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

@endsection