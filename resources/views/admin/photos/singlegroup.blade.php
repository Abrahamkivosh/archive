@extends('layouts.home')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">


          <div class="col-sm-6 flex " " style=" display:flex ;">
            <h1 class="m-0 text-dark">{{ $group->name }}</h1>
            <!-- Button trigger modal -->
            <button type="button" style=" background-color:gray;  ;" class="btn ml-3" data-toggle="modal" data-target="#modelId">
              <i class="fa fa-plus" aria-hidden="true"></i> {{  $group->category->name . " for  ". $group->name }}
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create new {{ $group->category->name }} for your {{ $group->name }} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data" >
                      @csrf
                      <div class="form-group">
                        <label for="name">{{ $group->category->name  }}<span class="text text-secondary" > you can upload multiple items</span>  </label>
                        <input id="name" class="form-control" type="file" placeholder="Group name" name="name[]" multiple>
                        <input id="group_id" value="{{ $group->id }}" hidden type="text" name="group_id">
                      </div>
                     
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>

                    </form>
                  </div>
                 
                </div>
              </div>
            </div>
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
                 
              @case("vidoes")
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
