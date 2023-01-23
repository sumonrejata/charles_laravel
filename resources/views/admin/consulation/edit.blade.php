@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-header">{{ __('Update Features') }}</div>

                <div class="card-body">
                    <form action="{{ route('feature.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="EditId" value="{{ $feature->id }}">
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Title:</label>
                          <input type="text" name="title" value="{{ $feature->title }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Description :</label>
                          <textarea rows="4" cols="50" type="text" name="description">{{ $feature->description }}</textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Image :</label>
                          <input type="file" name="image" class="form-control">
                          
                        </div>
                        <img src="{{ asset( $feature->image) }}"
                            style="width: 135px;height: 75px;margin: 0 auto;display: flex;"
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
