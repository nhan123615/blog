@extends('admin/layouts/app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
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
          <h3 class="card-title">Categories</h3>
          <a class="btn btn-success text-white" href="{{route('category.create')}}">Add New Category</a>      
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
              <th>Tag Name</th>
              <th>Slug</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{$category->index + 1}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                  <a href="{{route('category.edit', $category->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>            
                  </td>
                  <td>
                  <form id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}}" style="display:none" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                <a href="" onclick="
                if(confirm('Are you sure, you want to delete this ?')){
                  event.preventDefault();
                  document.getElementById('delete-form-{{$category->id}}').submit();
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
              <th>Tag Name</th>
              <th>Slug</th>
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