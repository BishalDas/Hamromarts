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
                        <h2>My Details</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div>

                        {{--   <form action="{{ route('admin-update',$adminData->id) }}" method="POST" enctype="multipart/form-data">

                               {{ csrf_field() }}
                               {{ method_field('PUT') }}--}}

                        {{-- <input type="hidden" name="id" id="id" value="$adminData->id">

                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="name" class="form-control" value="{{Auth::guard('web')->user()->name}}">

                         </div>
                         <div class="form-group">
                             <label>Userame</label>
                             <input type="text" name="username" class="form-control" value="{{Auth::guard('web')->user()->username}}">

                         </div>
                         <div class="form-group">
                             <label>Email</label>
                             <input type="text" name="email" class="form-control" value="{{Auth::guard('web')->user()->email}}">
                         </div>
                     <div class="form-group">
                         <label>Phone</label>
                         <input type="tel" name="phone" class="form-control" pattern="[0-9]{10}" required>
                     </div>--}}
                        <div  class="col-sm-12">
                            <div  class="form-group">
                                <table class="table border-bottom">
                                    <div class="row">
                                        <div class="col-sm-3" style="background-color:lavender;"><label  for="name">Name:</label></div>
                                        <div class="col-sm-9" style="background-color:lavender;"><label>{{Auth::guard('web')->user()->name}}</label></div>
                                        {{--<--}}
                                    </div>
                                </table>
                            </div>
                        </div>

                        <div  class="col-sm-12">
                            <div  class="form-group">
                                <table class="table border-bottom">
                                    <div class="row">
                                        <div class="col-sm-3" style="background-color:lavender;"><label  for="name">Email:</label></div>
                                        <div class="col-sm-9" style="background-color:lavender;"><label>{{Auth::guard('web')->user()->email}}</label></div>
                                        {{--<--}}
                                    </div>
                                </table>
                            </div>
                        </div>

                        <div  class="col-sm-12">
                            <div  class="form-group">
                                <table class="table border-bottom">
                                    <div class="row">
                                        <div class="col-sm-3" style="background-color:lavender;"><label  for="status">Status:</label></div>
                                        <div class="col-sm-9" style="background-color:lavender;"><label>{{Auth::guard('web')->user()->status}}</label></div>
                                        {{--<--}}
                                    </div>
                                </table>
                            </div>
                        </div>
                        <div  class="col-sm-12">
                            <div  class="form-group">
                                <table class="table border-bottom">
                                    <div class="row">
                                        <div class="col-sm-3" style="background-color:lavender;"><label  for="contact">Contact:</label></div>
                                        <div class="col-sm-9" style="background-color:lavender;"><label>{{Auth::guard('web')->user()->contact}}</label></div>
                                        {{--<--}}
                                    </div>
                                </table>
                            </div>
                        </div>
                        <div  class="col-sm-12">
                            <div  class="form-group">
                                <table class="table border-bottom">
                                    <div class="row">
                                        <div class="col-sm-3" style="background-color:lavender;"><label  for="create">Account Created At:</label></div>
                                        <div class="col-sm-9" style="background-color:lavender;"><label>{{Auth::guard('web')->user()->created_at}}</label></div>
                                        {{--<--}}
                                    </div>
                                </table>
                            </div>
                        </div>
                        {{-- </form>--}}

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