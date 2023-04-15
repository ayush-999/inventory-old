@extends('layouts.master')

@section('title', 'Create | Product')

@section('content')
    <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>{{$page_title}}</h4>
                  </div>
                  <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">

                        <div class="form-group">
                          <label>Product Image</label>
                          <input type="file" name="image" id="image" class="dropify" data-default-file="{{ asset('assets/img/default.jpg') }}" data-allowed-file-extensions="jpg png jpeg svg" data-max-file-size="3M" data-max-file-size-preview="3M" data-show-errors="true">
                          @error('image')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

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
                          <label>Category</label>
                          <select name="category_id" id="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                  {{ $category->name }}
                                </option>
                            @endforeach
                          </select>
                          @error('category_id')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label>Supplier</label>
                            <select name="supplier_id" id="supplier_id" class="form-control">
                              @foreach ($suppliers as $supplier)
                                  <option value="{{ $supplier->id }}">
                                    {{ $supplier->name }}
                                  </option>
                              @endforeach
                            </select>
                          @error('supplier_id')
                            <div class="error-wrapper">
                                  <span>{{ $message }}</span>
                            </div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label>Brand (optional)</label>
                          <input type="text" name="brand" id="brand" class="form-control">
                          @error('brand')
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

@section('scripts')
  <script>
    $('.dropify').dropify();
  </script>
@endsection