@extends('layouts.base')
@section('title','Category')
@section('content')

<div class="content-wrapper">
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">SubCategory Details<a type="button" href="{{route('subcategory.create')}} " class="btn btn-success btn-fw" style="float: right;">Add</a></h4>
                     
                     
                       
                     <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>SerialNo</th>
                            <th>SubCategoryName</th>
                            <th>Image</th>
                            <th>CategoryId</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Product</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($subcatdetail as $subcat)
                          <tr>
                            <td>{{$subcat->id}}</td>
                            <td>{{$subcat->sub_name}}</td>
                            <td>
                            
                            <img src="{{asset('../storage/app/'.$subcat->img_path)}}" class="imgclass">
                            </td>
                            <td>{{$subcat->category_id}}</td>
                            @if ($subcat->status != 1)
                            <td class="text-danger"> INACTIVE <i class="mdi mdi-arrow-down"></i></td>
                            @else
                            <td class="text-success"> ACTIVE <i class="mdi mdi-arrow-up"></i></td>
                            @endif
                            <td>
                            <div class="btn-group" role="group" aria-label="Action Menu">
                              <a title="Edit" href="{{route('subcategory.edit',$subcat->id)}}" class="btn btn-outline-secondary btn-icon-text"><i class="mdi mdi-file-check btn-icon-append"></i> Edit </a>
                            </div>
                            
                         </td>
                         <td>
                         <form action="{{route('subcategory.destroy',$subcat->id)}}" method="post">
                          @csrf
                          @method('delete')
                           <button type="submit" value="Delete" class="btn btn-outline-danger btn-icon-text"> 
                          <i class="mdi mdi-reload btn-icon-prepend"></i>Delete</button> 
                          </form>
                          
                         </td>
                          
                          <td><a href="{{route('subcategory.show',$subcat->id)}}" class="btn btn-outline-info btn-fw">Pro</button></td>
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