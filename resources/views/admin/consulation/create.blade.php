@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Add New Consulation') }}</div>

                <div class="card-body">
                    <form action="{{ route('feature.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Name :</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Phone :</label>
                          <input type="text" name="phone" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">E-mail :</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Message :</label>
                          {{-- <input type="text" name="description" class="form-control"> --}}
                          <textarea rows="4" cols="55" type="text" name="message"></textarea>
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
