@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header  text-center">{{ __('Add New Slider') }}</div>

                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Title 1 :</label>
                          <input type="text" name="title_1" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Title 2 :</label>
                          <input type="text" name="title_2" class="form-control">
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="form-group col-sm-9">
                          <label for="email">Description :</label>
                          {{-- <input type="text" name="description" class="form-control"> --}}
                          <textarea rows="4" cols="55" type="text" name="desc"></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Button Text :</label>
                          <input type="text" name="btn_text" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Button Url :</label>
                          <input type="text" name="btn_url" class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Image :</label>
                          <input type="file" name="image" class="form-control">
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
