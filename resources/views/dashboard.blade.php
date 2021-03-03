@extends('template.app')

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    @foreach ($data as $key)
    <h2>Data Harian Kasus Covid di {{ $key['name'] }}</h2>
    @endforeach

    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
              @foreach ($data as $key)
                <h3>{{ $key['positif'] }}</h3>
              @endforeach
            <p>Positif</p>
          </div>
          {{-- <div class="icon">
            <i class="ion ion-bag"></i>
          </div> --}}
          <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
            @foreach ($data as $key)
                <h3>{{ $key['sembuh'] }}</h3>
            @endforeach
            <p>Sembuh</p>
          </div>
          {{-- <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div> --}}
          <a href="#" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
              @foreach ($data as $key)
                <h3>{{ $key['meninggal'] }}</h3>
              @endforeach
            <p>Meninggal</p>
          </div>
          {{-- <div class="icon">
            <i class="ion ion-person-add"></i>
          </div> --}}
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
              @foreach ($data as $key)
                  <h3>{{ $key['name'] }}</h3>
              @endforeach
            <p>Positif Global</p>
          </div>
          {{-- <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div> --}}
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
