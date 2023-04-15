@extends('layouts.master')

@section('title', 'Edit | Supplier')

@section('content')
    <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Add supplier</h4>
                  </div>
                  <form action="{{ route('supplier.update',$supplier->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="1">
                      <div class="card-body">

                        <div class="form-group">
                          <label>Supplier Image</label>
                          <input type="file" name="image" id="image" class="dropify" data-default-file="{{ url('/uploads/supplier/'.$supplier->image) }}" data-allowed-file-extensions="jpg png jpeg svg" data-max-file-size="3M" data-max-file-size-preview="3M" data-show-errors="true" >
                          @error('image')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{ $supplier->name }}">
                          @error('name')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Email</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                              </div>
                            </div>
                            <input type="Email" name="email" id="email" class="form-control email-number" value="{{ $supplier->email }}">
                          </div>
                          @error('email')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Phone Number</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-phone" style="rotate: 90deg"></i>
                              </div>
                            </div>
                            <input type="text" name="phone" id="phone" class="form-control phone-number" value="{{ $supplier->phone }}">
                          </div>
                          @error('phone')
                              <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                              </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Address</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-map-marker-alt"></i>
                              </div>
                            </div>
                            <input type="text" name="address" id="address" class="form-control address" value="{{ $supplier->address }}">
                            @error('address')
                              <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                              </div>
                            @enderror
                          </div>
                        </div>
                      <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
  <script>
    $('.dropify').dropify();
  </script>
@endsection