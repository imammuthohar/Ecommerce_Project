
@extends('layout.mainadmin')

@section('titlepage')
Dashboard
@endsection

@section('subtitlepage')
Dashboard page
@endsection
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
              <span class="info-box-number">
          
                {{ $pending }}
              </span>

             
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
              <span class="info-box-number"> {{ $success }}  </span>
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
              <span class="info-box-number"> {{ $expired }}</span>
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
              <span class="info-box-number"> {{ $failed }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      {{-- baris grafik --}}
    <div class="row">
      <div class="col-md-12 mb-40">
        <!-- LINE CHART -->
        <div class="box box-warning ">
          <div class="box-header with-border">
            <h3 class="box-title">GRAFIK PENDAPATAN 2022</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            {{-- <div class="chart">
              <canvas id="linechart" style="height:250px"></canvas>
            </div> --}}

            <div class="panel">
              <div id="grafik">

              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      
      
      
      @endsection
      
      @section('footer')

      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script>
        Highcharts.chart('grafik', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'STATISTIK PENDAPATAN 2022'
    },
    subtitle: {
        text: 'Aza-Store.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah (Rp)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Indonesia',
        data: [10000,20000,30000,40000,50000,20000,
                70000,30000,10000,43000,20000,23000
      
      ]

    }]
});
      </script>
      @stop