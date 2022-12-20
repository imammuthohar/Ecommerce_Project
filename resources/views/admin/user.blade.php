@extends('layout.mainadmin')

@section('titlepage')
Customer
@endsection

@section('subtitlepage')
Customer Page
@endsection

@section('konten')
{{-- slider content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Customer</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}
         <div class="row mb-20">
            <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-btn">
                  
                  <a href=" #" class="tombol btn btn-warning"> <i class="fa fa-plus"> </i> Add New</a>
                </span>
               
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <form action="" method="GET" role="search">  
            <div class="col-lg-6">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Cari Slider">
                <span class="input-group-btn">
               
                  
                  <button class="btn btn-warning" type="submit"> <i class="fa fa-search"> </i> Search</button>
                </form>
                </span>

              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
               
                
               

          <br>
          <table class="table table-bordered">   
            <thead>
            <tr>
                <th>Image</th>
                <th>Link Slider</th>
                <th>Action</th>
        
            </tr>
          </thead>
            <tbody>
              @forelse ($slider as $slid)
              <tr>
                

                  <td> a </td>
                  {{-- <td>{{ $prod->categories->name }}</td> --}}
                  <td> a</td>
               
                  
                  
                  <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action=" " method="POST">
                          <a href="" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> 
                      </form>
                  </td>
              </tr>
            @empty
                <div class="alert alert-danger">
                    Data belum Tersedia.
                </div>
            @endforelse
          </tbody>
        </table>  
        {{ $customer->links() }}
       

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

@endsection