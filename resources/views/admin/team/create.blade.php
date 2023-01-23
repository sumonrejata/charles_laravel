@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header  text-center">{{ __('Add New Team') }}</div>

                <div class="card-body">
                    <form action="{{ route('ourteam.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Name :</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Designation :</label>
                          <input type="text" name="desig" class="form-control">
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
                          <label for="email">Social Icon :</label>
                          <input type="text" name="social_icon" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Social Link :</label>
                          <input type="text" name="social_link" class="form-control">
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
