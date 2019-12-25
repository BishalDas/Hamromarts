@extends('frontend.master.master')

@section('content')

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

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Product Add</h2>
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
                                <form action="{{route('product-add')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group form-group-sm">
                                        <lable for="category">Product Name</lable>
                                        <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Product name">
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


                                    <div class="form-group">
                                        <label for="title">Select SubCateory:</label>
                                        <select name="subcategory" id="subcategory" class="form-control" >
                                            <option value="0">Select Subcategory</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Select Sub-Subcategory:</label>
                                        <select name="subsubcategory" id="subsubcategory" class="form-control">
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




    @endsection

@section('scripts')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script type="text/javascript">

        $('#category').change(function(){
            var catID = $(this).val();
//console.log('fff');
            if(catID){
                $.ajax({
                    type:"GET",
                    url:{!! json_encode('category_list')!!}+'/'+catID,
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
                    url:{!! json_encode('subcategory_list')!!}+'/'+subcatID,
                    success:function(res){
                        console.log(res);

                        $('#subsubcategory').html(res);
                    }
                });
            }else{

                $("#subsubcategory").empty();
            }
        });



        {{--$('#category').on('change',function(){--}}
        {{--    console.log('u am here');--}}
        {{--    var subcatID = $(this).val();--}}
        {{--    console.log(subcatID);--}}
        {{--    if(subcatID){--}}
        {{--        $.ajax({--}}
        {{--            type:"GET",--}}
        {{--            url:"{{url('users/user-info/user-dashboard/product-add/get-subcategory-list')}}?subcategory_id="+subcatID,--}}
        {{--            success:function(res){--}}
        {{--                if(res){--}}
        {{--                    $("#subsubcategory").empty();--}}
        {{--                    $.each(res,function(key,value){--}}
        {{--                        $("#subsubcategory").append('<option value="'+key+'">'+value+'</option>');--}}
        {{--                    });--}}

        {{--                }else{--}}
        {{--                    $("#subsubcategory").empty();--}}
        {{--                }--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }else{--}}
        {{--        $("#subsubcategory").empty();--}}
        {{--    }--}}

        {{--});--}}
    </script>

    @endsection
