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
                        <h2>User Details</h2>
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
                            <div class="clo-md-12 center-block">
                                <div class="col-md-4">
                                        <img src="{{url('backend/images/users/'.$adminData->image)}}" class="img-responsive" alt="">
                                    </div>
                                <div class="col-md-8">
                                    <div class="row-md-4">
                                        <strong>Name:</strong>
                                        {{$adminData->name}}
                                    </div>
                                    <div class="row-md-4">
                                        <strong>Username:</strong>
                                        {{$adminData->username}}
                                    </div>
                                    <div class="row-md-4">
                                        <strong>Email:</strong>
                                        {{$adminData->email}}
                                    </div>
                                    <div class="row-md-4">
                                        <strong>Created At</strong>
                                        {{$adminData->created_at}}
                                    </div>
                                </div>
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