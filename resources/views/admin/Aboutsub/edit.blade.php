@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Update Sub About') }}</div>

                <div class="card-body">
                    <form action="{{ route('aboutsub.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="aboutEditId" value="{{ $sub_about->id }}">
                      <div class="row">
                        <div class="form-group col-sm-9">
                          <label for="email">Update Title:</label>
                          <input type="text" name="title" value="{{ $sub_about->title }}" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-9">
                          <label for="email">Update Icon :</label>
                          <input type="text" name="icon" value="{{  $sub_about->icon }}" class="form-control">
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
