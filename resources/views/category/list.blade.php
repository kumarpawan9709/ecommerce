@extends('layouts.base')
@section('title','Category')
@section('content')
@push('css')
<style>
.imgclass{
    width: 50px;
    height: 50px;
}
</style>
@endpush
<div class="btn-group" role="group" aria-label="Action Menu">
                                        <a title="Edit" href="{{route('category.create')}}" class="btn btn-sm btn-primary">  Add</a>
                                    </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">List</th>
    </tr>
  </thead>
  <tbody>
@foreach($categories as $category)
       
       
<tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$category->name}}</td>
      <td><img src="{{asset('../storage/app/'.$category->img_path)}}" class="imgclass" alt="{{$category->name}}"  /></td>
      <td>{{$category->status ? 'Active': 'Deactive'}}</td>
      <td>
                                    <div class="btn-group" role="group" aria-label="Action Menu">
                                    
                                        <a title="Edit" href="{{route('category.edit',$category)}}" class="btn btn-outline-secondary btn-icon-text"><i class="mdi mdi-file-check btn-icon-append"></i> Edit </a>
                                    </div>
                                </td>
                                <td> <form action="{{route('category.destroy',$category)}}" method="post">@csrf @method('delete') <button type="submit" value="Delete" class="btn btn-outline-danger btn-icon-text"> <i class="mdi mdi-reload btn-icon-prepend"></i>Delete</button> </form></td>
      <td><a href="{{route('category.show',$category->id)}}" class="btn btn-outline-info btn-fw">Subcat Details</button></td>                     
    </tr>
    @endforeach
  </tbody>
</table>
 



@push('scripts')
    
    
@endpush
@endsection
