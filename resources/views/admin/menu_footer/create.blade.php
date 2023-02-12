@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">               
                <div class="card-header  text-center">{{ __('Add New Menu') }}</div>

                <div class="card-body">
                    <form action="{{ route('footermenu.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Menu Name :</label>
                          <input type="text" name="menu_name" class="form-control @error('menu_name') is-invalid @enderror">
                          @error('menu_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="form-group col-sm-12">
                          <label for="email">Menu Url :</label>
                          <input type="text" name="url" class="form-control @error('url') is-invalid @enderror">
                          @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
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
