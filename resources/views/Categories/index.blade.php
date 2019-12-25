@extends('dashboardhome')

@section('main')
@if($message= Session::get('success'))
<div class="alert alert-success">
  <p>{{$message}}</p>
</div>
@endif
<div class="row">
  <div class="col-sm-12">
    <div>
      <a style="margin: 19px;" href="{{ route('categories.create')}}" class="btn btn-primary">Add new Category</a>
      </div> 
      <div lass="col-md-4">
      <h1>Categories</h1>  
     <div class="col-md-4">
       <form action="/search" post="get">
          <div class="input-group">
                 <input type="search" name="search" class="form-control">
                 <span class="input-group-prepend"></span>
                  <button type="search" class="btn btn-primary">search</button>
          </div>
        </form>
      </div>  
      </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>CID</td>
          <td>Cat_Name</td>
          <td>Status</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->cat_name}}</td>
            <td>{{$category->status}}</td>
            <td>
                <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="row">
<div calss="col-12 text-center">
{{$categories->links()}}
</div>
@endsection