@extends('layout.mainadmin')

@section('titlepage')
Add New Category
@endsection

@section('subtitlepage')
Add new Categories page
@endsection

@section('konten')
{{-- categories content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Categories</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}

         <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        
          @csrf
         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CATEGORY NAME</label>
            <input name="name" type="type" class="form-control" id="exampleFormControlInput1" placeholder="ketikkan nama gambar">

             <!-- error message untuk nama gambar -->
             @error('name')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
         @enderror
          </div>

          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">SLUG</label>
            <textarea name="slug"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="info slug"></textarea>

            <!-- error message untuk slug -->
            @error('slug')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
          </div>    
          
    
            
            <div class="mb-3">
                <label for="formFile" class="form-label">GAMBAR</label>
                <input name="image" class="form-control" type="file" id="formFile">

                <!-- error message untuk title -->
                @error('image')
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