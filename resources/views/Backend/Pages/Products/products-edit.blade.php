@extends('backend.master.master')

@section('content')

        <!DOCTYPE html>
<html lang="en">



<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                @include('backend.layouts.messages')
                <div class="x_panel">
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
                    <form action="{{ route('product-update',$products->id) }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->name}}">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select id="category" name="category" class="form-control">
                                <option value="{{ $products->category}}">
                                @foreach($categories as $key => $cat)
                                    <option value="{{$key}}"> {{$cat}}</option>
                                @endforeach
                            </select>
                            {{--                            <input type="text" name="name" class="form-control" value="{{ $products->category}}">--}}
                        </div>
                        <div class="form-group">
                            <label>Subcategory</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->subcategory}}">
                        </div>
                        <div class="form-group">
                            <label>SubsubCategory</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->subsubcategory}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->price}}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->image}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->description}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->phone}}">
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Name</label>--}}
                        {{--                            <input type="text" name="name" class="form-control" value="{{ $products->name}}">--}}
                        {{--                        </div>--}}


                        <button type="submit" name="submit" class="btn btn-primary">Update data</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script type="text/javascript">

        $('#category').change(function(){
            var catID = $(this).val();
            if(catID){
                $.ajax({
                    type:"GET",
                    url:{!! json_encode('admin_category_list')!!}+'/'+catID,
                    success:function(res){
                        console.log(res);

                        $('#subcategory').html(res);
                    }
                });
            }else{
                $("#subcategory").empty();
                $("#subsubcategory").empty();
            }
        });

    </script>
    <script type="text/javascript">

        $('#subcategory').change(function(){
            var subcatID = $(this).val();
            if(subcatID){
                $.ajax({
                    type:"GET",
                    url:{!! json_encode('admin_subcategory_list')!!}+'/'+subcatID,
                    success:function(res){
                        console.log(res);

                        $('#subsubcategory').html(res);
                    }
                });
            }else{

                $("#subsubcategory").empty();
            }
        });

    </script>

@endsection

@endsection