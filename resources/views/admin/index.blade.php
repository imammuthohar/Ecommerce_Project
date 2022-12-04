
@extends('layout.mainadmin')
@section('konten')
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua">
            <i class="fa fa-hand-paper-o"></i>
            </span>

            <div class="info-box-content">
              <span class="info-box-text">PANDING</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"> <i class="fa fa-check-circle"></i>
              
            
            
            
            </span> 

            <div class="info-box-content">
              <span class="info-box-text">SUCCESS</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-calendar-times-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">EXPIRED</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">FAILED</span>
              <span class="info-box-number">0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    @endsection