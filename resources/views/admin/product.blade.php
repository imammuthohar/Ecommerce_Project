@extends('layout.mainadmin')

@section('titlepage')
Product
@endsection

@section('subtitlepage')
Product page
@endsection

@section('konten')
{{-- product content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Product</h3>

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
                  
                  <a href="{{ route('product.create') }} " class="tombol btn btn-warning"> <i class="fa fa-plus"> </i> Add New</a>
                </span>
               
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <form action="" method="GET" role="search">  
            <div class="col-lg-6">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Cari product">
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
                <th>Product Name</th>
                <th>Categoy Name</th>
                <th>Stock</th>
                <th>Action</th>
        
            </tr>
          </thead>
            <tbody>
              @forelse ($product as $prod)
              <tr>
                

                  <td>{{ $prod->title }}</td>
                  <td>{{ $prod->title }}</td>
                  <td>{{ $prod->stock }}</td>
                  
                  <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.destroy', $prod->id) }}" method="POST">
                          <a href="{{ route('product.edit', $prod->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
        {{ $product->links() }}
       

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

@endsection