@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Counter </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
  
  
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Counter Info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SI No</th>
                      <th>Title</th>
                      <th>Number</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->number }}</td>
                        <td>
                            <a href="{{ route('counter.edit',$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('counter.delete',$row->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection