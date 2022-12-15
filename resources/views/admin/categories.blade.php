@extends('layout.mainadmin')

@section('titlepage')
Categories
@endsection

@section('subtitlepage')
Categories page
@endsection

@section('konten')
{{-- categories content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>

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
                  
                  <a href="{{ route('categories.create')}} " class="tombol btn btn-warning"> <i class="fa fa-plus"> </i> Add New</a>
                </span>
               
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari berdasarkan kategori">
                <span class="input-group-btn">
                <form action="">  
                  <button class="btn btn-warning" name="cari" type="button"> <i class="fa fa-search"> </i> Search</button>
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
                <th>Categoy Name</th>
                <th>Action</th>
        
            </tr>
          </thead>
            <tbody>
              @forelse ($category as $kategori)
              <tr>
                  <td class="text-center">
                      <img src="{{ Storage::url('public/img/').$kategori->image }}" class="rounded" style="width: 150px">
                  </td>
                  <td>{{ $kategori->name }}</td>
      
                  <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('categories.destroy', $kategori->id) }}" method="POST">
                          <a href="{{ route('categories.edit', $kategori->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
        {{ $category->links() }}
       

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

@endsection