@extends('layouts.base')
@section('title','ProductCreate')
@section('content')
@push('css')

@endpush
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <form class="forms-sample" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                          <label for="exampleInputName1">Select Category</label>
                          <div class="col-sm-9">
                              <select class="form-control" name="select_subcategory">
                              @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->sub_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="product_name" id="exampleInputName1" value="{{$product[0]->product_name}}" placeholder="Name">
                        @error('name')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>
                      <div class="form-group ">
                        <label for="exampleInputMobile">Quantity</label>
                         <input type="text" class="form-control" name="quantity" value="{{$product[0]->product_varient->quantity}}" id="exampleInputMobile" placeholder="Quantity">
                       </div>
                       <div class="form-group ">
                        <label for="exampleInputMobile">Unit</label>
                         <!-- <input type="text" class="form-control" name="unit" id="exampleInputMobile" placeholder="Unit"> -->
                         <select class="form-control" name="unit">
                                <option value="kg">Kg</option>
                                <option value="gm">Gm</option>
                                <option value="piece">Piece</option>
                         </select>
                       </div>
                       <div class="form-group ">
                        <label for="exampleInputMobile">MRP Price</label>
                         <input type="text" class="form-control" name="mrp_price" id="exampleInputMobile" value="{{$product[0]->product_varient->base_mrp
}}" placeholder="MRP Price">
                       </div>
                       <div class="form-group ">
                        <label for="exampleInputMobile">Base Price</label>
                         <input type="text" class="form-control" name="base_price" value="{{$product[0]->product_varient->base_price
}}" id="exampleInputMobile" placeholder="Base Price">
                       </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" value="{{$product[0]->product_varient->description
}}" name="pro_description" id="exampleInputName1" placeholder="Description">
                       </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="proimg_file" class="file-upload-default">
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
