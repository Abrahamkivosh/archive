@extends('layouts.home')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ $group->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ $group->category->name  }}</a></li>
              <li class="breadcrumb-item active">{{ $group->name }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          {{--  --}}
          
          <div class="row">
          @foreach ($group->items as $item)
          {{-- Image --}}
          
            

          @switch( $group->category->name )
         
              @case("image")
              <div class="col-md-4 ">
              @include("admin.photos",['item'=>$item])
                  
                  @break
                 
              @case("video")
              <div class="col-md-4 ">
                  @include("admin.videos",['item'=>$item])
                  @break
             
              @case("music")
              <div class="col-md-12 ">
                  @include("admin.music",['item'=>$item])
                  @break
                
              @case("document")
                <div class="col-md-4 ">
                  @include("admin.document",['item'=>$item])
                  @break
              @default
                  
          @endswitch


          {{-- video --}}

          {{-- Document --}}
          
               </div>
          @endforeach
           
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>

@endsection
