@extends('layout.mainadmin')

@section('titlepage')
Add New Product
@endsection

@section('subtitlepage')
Add new Product page
@endsection

@section('konten')
{{-- categories content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Product</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}

         <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
          
          @csrf
          
          <div class="mb-3">
              <label for="formFile" class="form-label">GAMBAR</label>
              <input required name="image" class="form-control" type="file" id="formFile">
  
              <!-- error message untuk title -->
              @error('image')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
            </div>
            
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Name</label>
            <input required name="namaproduk" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ketikkan nama product">

             <!-- error message untuk nama gambar -->
             @error('name')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
         @enderror
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Slug</label>
            <input required name="slug" type="text" class="form-control" id="exampleFormControlInput1" placeholder="ketik slug">

             <!-- error message untuk nama gambar -->
             @error('slug')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
         @enderror
          </div>
          
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Category_id</label>
            <select class="form-control" name="category" id="">
              @foreach ($category as $kategory )
              <option value="{{ $kategory->id }}"> {{ $kategory->name }} </option>
              @endforeach
            </select>
            
          </div>  
          
        
          <div class="mb-3">
            <label class="form-label">User_ID</label>
            <select class="form-control" name="user_id" id="">
              @foreach ($user as $usr )
              <option value="{{ $usr->id }}"> {{ $usr->name }} </option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Weight</label>
            <input required type="number" name="weight"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Berat "></input>

            <!-- error message untuk weight -->
            @error('category')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div>    

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">STOCK</label>
            <input required type="number" name="stock"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan stock">

            <!-- error message untuk slug -->
            @error('stock')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div>  
          
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea required name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>


            <!-- error message untuk slug -->
            @error('description')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div>  

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Price</label>
            <input required type="number" name="price" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="masukkan harga">

            <!-- error message untuk slug -->
            @error('price')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div> 

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Discount</label>
            <input required type="number" name="discount"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan discount">

            <!-- error message untuk slug -->
            @error('discount')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div> 

          
              
          
          <br>  
          <div class="mb-3">
            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"> </i> Save </button>
            <button type="reset" class="btn btn-warning"> <i class="fa fa-refresh fa-spin fa-1x fa-fw"> </i> Reset </button>
          </div>
         </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

@endsection