@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Update Testimonial') }}</div>

                <div class="card-body">
                    <form action="{{ route('counter.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="CounEditId" value="{{ $data->id }}">
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Title :</label>
                          <input type="text" name="title" value="{{ $data->title }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Number :</label>
                          <input type="text" name="number" value="{{ $data->number }}" class="form-control">
                        </div>
                      </div>
                      <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
