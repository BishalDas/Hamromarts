@extends('dashboardhome') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">User Updated</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="id">Cid:</label>
                <input type="text" class="form-control" name="id" value={{ $category->id }} />
            </div>

            <div class="form-group">
                <label for="cat_name">Cat_Name:</label>
                <input type="text" class="form-control" name="cat_name" value={{ $category->cat_name }} />
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" value={{ $category->status}} />
                <select name="status" value={{ $category->status}}>
              <option value="1">1</option>
              <option value="0">0</option>
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection