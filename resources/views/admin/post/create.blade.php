@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-primary">
                
                <div class="card-header  text-center">{{ __('Add New Post') }}</div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-12">
                          <label for="email">Title:</label>
                          <input type="text" name="post_title" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="email">Category :</label>
                          <select class="form-control" name="category_id">
                            <option disabled selected >--Select category--</option>
                           @foreach ($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>     
                            @endforeach
                          </select>
                      </div>
                     
                      <div class="row">
                        <div class="form-group col-sm-9">
                          <label for="email">Description :</label>
                          {{-- <input type="text" name="description" class="form-control"> --}}
                          <textarea rows="4" cols="55" type="text" name="desc"></textarea>
                        </div>
                      </div>

                      @foreach ( $tags as $tag)                        
                          {{-- <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">{{ $tag->name }}</label>
                              </div>
                          </div> --}}

                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}" type="checkbox">
                              <label for="tag{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                            </div>
           
                          </div>
                      @endforeach

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
