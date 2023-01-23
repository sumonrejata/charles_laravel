@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Update Testimonial') }}</div>

                <div class="card-body">
                    <form action="{{ route('ourteam.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="TeamEditId" value="{{ $data->id }}">
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

                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Social Icon:</label>
                          <input type="text" name="social_icon" value="{{ $data->social_icon }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Social Link :</label>
                          <input type="text" name="social_link" value="{{ $data->social_link }}" class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Image :</label>
                          <input type="file" name="image" class="form-control">
                          
                        </div>
                        <img src="{{ asset( $data->image) }}"
                            style="width: 170px; height:100px;margin: 0 auto;display: flex;"
                            alt="">
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
