@extends('frontend.master.master')

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

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User Profile</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div>

                        <table class="table table-bordered">

                            <tr>
                                <td> Product Name </td>
                                <td> User id </td>
                                <td> Category</td>
                                <td> SubCategory </td>
                                <td> Sub-subCategory </td>
                            </tr>


                            @foreach($products as $product)
                                <tr>
                                    <td> {{$product->name}} </td>
                                    <td> {{$product->uid}} </td>
                                    <td> <a href=""><input type="submit" name="update" value="Update" class="btn-primary"></a> </td>
                                    <td> <a href=""><input type="submit" name="delete" value="Delete" class="btn-danger"></a> </td>
                                </tr>
                                    {{--<td> <a href="edit/{{ $value->id }}"><input type="submit" name="update" value="Update" class="btn-primary"></a> </td>
                                    <td> <a href="delete{{ $value->id }}"><input type="submit" name="delete" value="Delete" class="btn-danger"></a> </td>
                                </tr>--}}
                            @endforeach
                        </table>


                        {{--</div>
                        <div class="form-group">
                            <label>SubCategory</label>
                            <input type="text" name="subategory" class="form-control" value="{{Auth::guard('web')->product()->subcategory}}">
                        </div>
                        <div class="form-group">
                            <label>Subsubategory</label>
                            <input type="subsubategory" name="subsubategory" class="form-control" value="{{Auth::guard('web')->product()->subsubcategory}}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" value="{{Auth::guard('web')->product()->image}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="{{Auth::guard('web')->product()->description}}">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="sulg" class="form-control" value="{{Auth::guard('web')->product()->slug}}">
                        </div>--}}

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->



</html>

@endsection