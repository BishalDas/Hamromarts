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



<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a style="margin: 19px;" href="{{ route('admin-users')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Products</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="clo-md-12">
                                <form action="{{route('add-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group form-group-sm">
                                        <lable for="proname">Product Name</lable>
                                        <input type="text" name="pname" id="pname" class="form-control" value="{{old('name')}}"
                                               placeholder="Enter product">
                                        <a href="" style="color:red">{{$errors->first('name')}}</a>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label for="category">Category</label>
                                        <select id="category" name="category_id" class="form-control">
                                            <option value="" selected disabled>Select</option>
                                            @foreach($categories as $key => $cat)
                                                <option value="{{$key}}"> {{$cat}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label for="title">Select SubCateory:</label>
                                        <select name="subcategory" id="subcategory" class="form-control">
                                            <option value="0">Select Subcategory</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <label for="title">Select Sub-Subcategory:</label>
                                        <select name="subsubcategory" id="subsubcategory" class="form-control" >
                                            <option value="0">Select Sub-Subcategory</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <lable for="price">Price</lable>
                                        <input type="number" name="price" id="price" min="1" class="form-control">
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <lable for="image">Product Picture</lable>
                                        <input type="file" name="upload" id="image" class="form-control">
                                        <a href="" style="color:red">{{$errors->first('upload')}}</a>
                                    </div>

                                    <div class="form-group form-group-sm">
                                        <lable for="description">Product Description</lable>
                                        <textarea placeholder="Please provide some description about your product" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group form-group-sm">
                                        <button class="btn btn-success btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->


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




</html>

@endsection