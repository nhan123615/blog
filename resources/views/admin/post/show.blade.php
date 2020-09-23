@extends('admin/layouts/app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header text-center">
          <h3 class="card-title">Posts</h3>
          <a class="btn btn-success text-white" href="{{route('post.create')}}">Add New Post</a>      
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Slug</th>
              <th>Created At</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$post->index + 1}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                <a href="{{route('post.edit', $post->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>            
                  </td>
                <td>
                <form id="delete-form-{{$post->id}}" action="{{route('post.destroy',$post->id)}}" style="display:none" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                </form>
              <a href="" onclick="
              if(confirm('Are you sure, you want to delete this ?')){
                event.preventDefault();
                document.getElementById('delete-form-{{$post->id}}').submit();
              }else{
                event.preventDefault();
              }"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>    
              @endforeach
               
            </tbody>
            <tfoot>
            <tr>
              <th>S.No</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Slug</th>
              <th>Created At</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection