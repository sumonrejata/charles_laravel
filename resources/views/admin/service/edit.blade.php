@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-header">{{ __('Update Service') }}</div>

                <div class="card-body">
                    <form action="{{ route('service.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="SerEditId" value="{{ $edit_service->id }}">
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Title:</label>
                          <input type="text" name="title" value="{{ $edit_service->title }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Description :</label>
                          <textarea rows="4" cols="50" type="text" name="desc">{{ $edit_service->desc }}</textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Button Text:</label>
                          <input type="text" name="btn_text" value="{{ $edit_service->btn_text }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Image :</label>
                          <input type="file" name="image" class="form-control">
                          
                        </div>
                        <img src="{{ asset( $edit_service->image) }}"
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
