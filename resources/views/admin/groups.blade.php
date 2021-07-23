@extends('layouts.home')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $category->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ $category->name }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">


       
            @foreach ($groups as $group)
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>

                    <p>{{ $group->name }}</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{ route('groups.show',$group->id) }}" class="small-box-footer">View More... <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

            @endforeach

          

            <!-- ./col -->
          </div>


          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

@endsection
