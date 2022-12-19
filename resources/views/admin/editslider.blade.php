@extends('layout.mainadmin')

@section('titlepage')
Edit Slider
@endsection

@section('subtitlepage')
Edit Slider Page
@endsection

@section('konten')
{{-- slider content --}}
<div class="row">
    <div class="col-md-12 mb-40">
      <!-- LINE CHART -->
      <div class="box box-warning ">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Slider Page</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

         {{-- isi --}}
         
         <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
          
            @csrf
            @method('PUT');

            
            
            <div class="mb-3">
                <label for="formFile" class="form-label">GAMBAR</label>
                <input  name="image" class="form-control" type="file" id="formFile">
    
                             </div>
              <br>
              <div class="mb-9">
                  <label for="formFile" class="form-label">LINK SLIDER</label> 
                  <input  name="link" class="form-control" type="text" value=" {{ $slider->link }}">
      
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