@extends('layouts.home')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 flex " " style=" display:flex ;">
            <h1 class="m-0 text-dark">{{ $category->name }}</h1>
            <!-- Button trigger modal -->
            <button type="button" style=" background-color:gray;  ;" class="btn ml-3" data-toggle="modal" data-target="#modelId">
              <i class="fa fa-plus" aria-hidden="true"></i> group
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create new Group for your {{ $category->name }} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('groups.store',$category->id ) }}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="name">Group Name</label>
                        <input id="name" class="form-control" type="text" placeholder="Group name" name="name">
                        <input id="category_id" value="{{ $category->id}}" hidden type="text" name="category_id">
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
                    <h3>{{ $group->items_count }}</h3>

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
