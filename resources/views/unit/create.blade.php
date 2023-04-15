@extends('layouts.master')

@section('title', 'Create | Unit')

@section('content')
    <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>{{$page_title}}</h4>
                  </div>
                  <form action="{{ route('unit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">

                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" id="name" class="form-control">
                          @error('name')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Short Form</label>
                          <input type="text" name="short_form" id="short_form" class="form-control">
                          @error('short_form')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>
                      <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection