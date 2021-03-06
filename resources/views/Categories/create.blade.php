@extends('dashboardhome')

@section('main')
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Category</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('categories.store') }}">
          @csrf
          <div class="form-group">    
              <label for="id">CID</label>
              <input type="text" class="form-control" name="id"/>
          </div>
        
          <div class="form-group">
              <label for="cat_name">Cat_Name</label>
              <input type="text" class="form-control" name="cat_name"/>
          </div>  
          <div class="form-group">
              <label for="status">Status:</label>
              <select name="status">
              <option value="1">1</option>
              <option value="0">0</option>
              </select>
          </div>                      
          <button type="submit" class="btn btn-primary-outline">save</button>
      </form>
  </div>
</div>
</div>
@endsection