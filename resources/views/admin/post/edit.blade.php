@extends('admin/layouts/app')

@section('main-content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

             <!-- general form elements -->
   <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Titles</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @include('includes.messages')
    <form role="form" action="{{ route('post.update',$post->id)}}" method="POST">
      {{csrf_field()}}
      {{method_field('PATCH')}}

      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="title">Post Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$post->title}}">
            </div>
    
            <div class="form-group">
              <label for="subtitle">Post Sub Title</label>
              <input type="text" class="form-control" id="subtitle" placeholder="Sub Title" name="subtitle" value="{{$post->subtitle}}">
            </div>

            <div class="form-group">
              <label for="slug">Post Slug</label>
              <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{$post->slug}}">
            </div>
          </div>
  
          <div class="col-lg-6">         
            <div class="row">
              <div class="col-lg-5">
                <div class="form-check mt-5">
                <input value="1" type="checkbox" class="form-check-input" name="status"
                @if($post->status==1) checked @endif >
                <label class="form-check-label" for="status" name="status">Pulish</label>
              </div>
            </div>
              <div class="col-lg-7">
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image" name="image">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
             
            </div>

                <div class="form-group" >
                  <label>Select Tags</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;"  tabindex="-1" aria-hidden="true" name = "tags[]">
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group" >
                  <label>Select Category</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name = "categories[]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              
            
      


          </div>     
        </div>
        
      </div>
      <!-- /.card-body -->
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Write post body here
            <small>Simple and fast</small>
          </h3>
          <!-- tools box -->
          <div class="card-tools">
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fas fa-minus bg-light"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        
      
        <!-- /.card-header -->
        <div class="card-body pad">
          <div class="mb-3">
            <textarea class="textarea" placeholder="Place some text here" name="body"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    {{$post->body}}      
            </textarea>
          </div>
        
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-warning" href="{{route('post.index')}}">Back</a>
      </div>
    </form>
  </div>
  <!-- /.card -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection