@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-header">{{ __('Update Header Logo') }}</div>

                <div class="card-body">
                    <form action="{{ route('headerlogo.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="logoEditId" value="{{ $data->id }}">
                      
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Update Image :</label>
                          <input type="file" name="image" class="form-control">
                          
                        </div>
                        <img src="{{ asset( $data->image) }}"
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
