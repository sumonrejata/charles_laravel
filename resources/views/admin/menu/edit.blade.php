@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header text-center">{{ __('Update Menu') }}</div>

                <div class="card-body">
                    <form action="{{ route('menu.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="MenuEditId" value="{{ $data->id }}">

                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Update Menu :</label>
                          <input type="text" name="menu_title" value="{{ $data->menu_title }}" class="form-control">
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
