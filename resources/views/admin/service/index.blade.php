@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Service </h1>
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
                <h3 class="card-title">About Service Info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>SI No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Btn Text</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($service as $row)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->desc }}</td>
                        <td>{{ $row->btn_text }}</td>
                        <td><img src="{{ asset($row->image) }}"
                            style="width: 135px;height: 75px;margin: 0 auto;display: flex;"
                            alt="">
                        </td>
                        <td>
                            <a href="{{ route('service.edit',$row->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('service.delete',$row->id) }}" class="btn btn-danger">Delete</a>
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
