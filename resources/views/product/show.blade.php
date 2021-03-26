@extends('layouts.base')
@section('title','Category')
@section('content')

<div class="content-wrapper">
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Details<a type="button" href="{{route('product.create')}} " class="btn btn-success btn-fw" style="float: right;">Add</a></h4>
                     
                     
                       
                     <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>SerialNo</th>
                            <th>ProductName</th>
                            <th>ProductImage</th>
                            <th>SubCategoryId</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Product</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                          <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>
                            
                            <img src="{{asset('../storage/app/'.$product->product_image)}}" class="imgclass">
                            </td>
                            <td>{{$product->sub_category_id}}</td>
                            @if ($product->status != 1)
                            <td class="text-danger"> INACTIVE <i class="mdi mdi-arrow-down"></i></td>
                            @else
                            <td class="text-success"> ACTIVE <i class="mdi mdi-arrow-up"></i></td>
                            @endif
                            <td>
                            <div class="btn-group" role="group" aria-label="Action Menu">
                              <a title="Edit" href="{{route('product.edit',$product->id)}}" class="btn btn-outline-secondary btn-icon-text"><i class="mdi mdi-file-check btn-icon-append"></i> Edit </a>
                            </div>
                            
                         </td>
                         <td>
                         <form action="{{route('product.destroy',$product->id)}}" method="post">
                          @csrf
                          @method('delete')
                           <button type="submit" value="Delete" class="btn btn-outline-danger btn-icon-text"> 
                          <i class="mdi mdi-reload btn-icon-prepend"></i>Delete</button> 
                          </form>
                          
                         </td>
                          
                          <td><a href="{{route('product.show',$product->id)}}" class="btn btn-outline-info btn-icon-text">Favourite</button></td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>     
    </div>
</div>
 

@push('scripts')
    
    
@endpush
@endsection