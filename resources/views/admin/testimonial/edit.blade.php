@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Update Testimonial') }}</div>

                <div class="card-body">
                    <form action="{{ route('testimonial.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="TesEditId" value="{{ $data->id }}">
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Name :</label>
                          <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Designation :</label>
                          <input type="text" name="desig" value="{{ $data->desig }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Description:</label>
                          <textarea rows="4" cols="55" type="text" name="desc">{{ $data->desc }}</textarea>
                        </div>
                      </div>
                      <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
