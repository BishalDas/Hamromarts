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
        {{--<div class="page-title">
            <div class="title_left">
                <h3>ADMIN ADD USER</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>--}}
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
                        <h2>Admin ADD</h2>
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
                                    <form action="{{route('add-admin')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group form-group-sm">
                                            <lable for="name">Name</lable>
                                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"
                                                   placeholder="Enter name">
                                            <a href="" style="color:red">{{$errors->first('name')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <lable for="username">Username</lable>
                                            <input type="text" name="username" id="name" class="form-control" value="{{old('username')}}"
                                                   placeholder="Enter Username">
                                            <a href="" style="color:red">{{$errors->first('username')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <lable for="email">Email</lable>
                                            <input type="text" name="email" id="name" class="form-control" value="{{old('email')}}"
                                                   placeholder="Enter the email address">
                                            <a href="" style="color:red">{{$errors->first('email')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <lable for="password">Password</lable>
                                            <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}"
                                                   placeholder="Enter password">
                                            <a href="" style="color:red">{{$errors->first('password')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <lable for="password_confirmation">Confirm Password</lable>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{old('password')}}"
                                                   placeholder="Please Confirm your password">
                                            <a href="" style="color:red">{{$errors->first('password_confirmation')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <lable for="image">Profile Picture</lable>
                                            <input type="file" name="upload" id="image" class="form-control">
                                            <a href="" style="color:red">{{$errors->first('upload')}}</a>
                                        </div>
                                        <div class="form-group form-group-sm">
                                            <button class="btn btn-success btn-sm"> Add record</button>
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



</html>

@endsection