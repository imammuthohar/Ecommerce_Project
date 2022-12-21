@extends('layout.mainadmin')

@section('titlepage')
Edit User
@endsection

@section('subtitlepage')
Edit User Page
@endsection

@section('konten')
{{-- slider content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Edit User Page</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}
         
         <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT');

            
                       
              <div class="mb-3">
                  <label class="form-label">FULL NAME</label> 
                  <input  name="name" class="form-control" type="text" value=" {{ $user->name }}">
      
                                 
                 <div class="mb-3">
                     <label class="form-label">Email Address</label> 
                     <input  name="email" class="form-control" type="email" value=" {{ $user->email }}">

                    
                    <div class="mb-3">
                        <label class="form-label">PASSWORD</label> 
                        <input  name="password" class="form-control" type="password" value=" {{ $user->password }}">
            
                      
                       
                       <div class="mb-3">
                           <label class="form-label">CONFIRM PASSWORD</label> 
                           <input  name="confirmpassword" class="form-control" type="password" value=" {{ $user->remember_token }}">
               
                           <!-- error message untuk title -->
                           
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