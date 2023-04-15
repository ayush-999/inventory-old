@extends('layouts.master')

@section('title', 'Edit | Category')

@section('content')
    <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>{{ $page_title }}</h4>
                  </div>
                  <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="card-body">

                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                          @error('name')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>
                      <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection