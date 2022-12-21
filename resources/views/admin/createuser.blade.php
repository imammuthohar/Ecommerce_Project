@extends('layout.mainadmin')

@section('titlepage')
Add User
@endsection

@section('subtitlepage')
Add User Page
@endsection

@section('konten')
{{-- slider content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Add User Page</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}
         
         <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
          
            @csrf

            
            
            {{-- <div class="mb-3">
                <label for="formFile" class="form-label">GAMBAR</label>
                <input  name="image" class="form-control" type="file" id="formFile">
    
                <!-- error message untuk title -->
                @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <br> --}}
              
              <div class="mb-3">
                  <label class="form-label">FULL NAME</label> 
                  <input  name="name" class="form-control" type="text" placeholder="Ketik Nama Lengkap">
      
                  <!-- error message untuk title -->
                  @error('neme')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
              </div>
                 @enderror
                 
                 <div class="mb-3">
                     <label class="form-label">Email Address</label> 
                     <input  name="email" class="form-control" type="email" placeholder="Masukkan email anda">
         
                     <!-- error message untuk title -->
                     @error('email')
                     <div class="alert alert-danger mt-2">
                         {{ $message }}
                 </div>
                    @enderror
                    
                    <div class="mb-3">
                        <label class="form-label">PASSWORD</label> 
                        <input  name="password" class="form-control" type="password" placeholder="masukkan password">
            
                        <!-- error message untuk title -->
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                    </div>
                       @enderror
                       
                       <div class="mb-3">
                           <label class="form-label">CONFIRM PASSWORD</label> 
                           <input  name="confirmpassword" class="form-control" type="password" placeholder="masukkan konfirmasi password">
               
                           <!-- error message untuk title -->
                           @error('confirmpassword')
                           <div class="alert alert-danger mt-2">
                               {{ $message }}
                       </div>
                          @enderror


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