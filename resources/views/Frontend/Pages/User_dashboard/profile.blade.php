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
                            <h2>My Profile</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#profile">My Profile</a></li>
                                <li><a data-toggle="tab" href="#change">Change Password</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="profile" class="tab-pane fade in active">
                                    <h3>My Profile</h3>
                                    <div class="row">
                                        <div class="clo-md-12 center-block">
                                            <div class="col-md-4">
                                                {{--<img src="{{url('backend/images/users/'.$adminData->image)}}" class="img-responsive" alt="">--}}
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row-md-4">
                                                    <strong>Name:</strong>
                                                    {{Auth::guard('web')->user()->name}}
                                                </div>
                                                <div class="row-md-4">
                                                    <strong>Username:</strong>
                                                    {{Auth::guard('web')->user()->name}}
                                                </div>
                                                <div class="row-md-4">
                                                    <strong>Email:</strong>
                                                    {{Auth::guard('web')->user()->name}}
                                                </div>
                                                <div class="row-md-4">
                                                    <strong>Created At</strong>
                                                    {{Auth::guard('web')->user()->name}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="change" class="tab-pane fade">
                                    <h3>Change Password</h3>
                                    <form class="form-horizontal" method="POST" action="#">
                                        <input type="hidden" name="_token">

                                        <div class="form-group">
                                            <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                            <div class="col-md-6">
                                                <input id="current-password" type="password" class="form-control" name="currentpassword" required>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                                            <div class="col-md-6">
                                                <input id="new-password" type="password" class="form-control" name="password" required>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                                            <div class="col-md-6">
                                                <input id="new-password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Change Password
                                                </button>
                                            </div>
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