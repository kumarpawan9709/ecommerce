@extends('layouts.base')
@section('title','CategoryCreate')
@section('content')
@push('css')

@endpush
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <form class="forms-sample" method="POST" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputName1">Select Category</label>
                          <div class="col-sm-9">
                              <select class="form-control" name="select_category">
                              @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="subcat_name" id="exampleInputName1" placeholder="Name">
                        @error('name')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="subimg_file" class="file-upload-default">
                          @error('img_path')
                        <span class="text-danger">{{$message}}</span>
                          @enderror
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
 @push('scripts')
 
 @endpush
@endsection
