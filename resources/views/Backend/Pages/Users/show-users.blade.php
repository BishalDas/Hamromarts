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
                <h3>Show Users Details</h3>
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

        <div>
            <a style="margin: 19px;" href="{{route('add-admin')}}" class="btn btn-primary">Add new Admin User</a>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Show Users Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix">
                        </div>
                        <div class="x_content">
                            <class class="row">
                                <div class="col-md-12">
                                    @include('backend.layouts.messages')
                                    <div class="row">
                                        <form action="">
                                            <div class="col-md-10" style="padding-right: 0">
                                                <div class="form-group form-group-sm">
                                                    <input type="text" class="form-control"  id="user_search" name="search" placeholder="Search anything ">

                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding-left: 1px;">
                                                    <button type="btn" class="btn btn-primary btn-sm" id="user_search">Search</button>
                                            </div>
                                        </form>
                                        <div class="col col-md-6"></div></col->
                                        <div id="search-box">nnn</div>
                                    </div>
                                    <table class="table table-hover">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Admin Type</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($adminData as $key=>$admin)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->username}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <form action="{{route('admin-users-type')}}" onclick="return confirm('Do you really want to change ({{$admin->admin_type}}) Admin_Type')" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$admin->id}}">
                                                    @if($admin->admin_type=='super-admin')
                                                        <button name="super-admin" class="btn btn-success btn-xs">
                                                            super-admin
                                                        </button>
                                                    @else
                                                        <button name="admin" class="btn btn-primary btn-xs">admin</button>

                                                    @endif
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('users-update-status')}}"  onclick="return confirm('Do you really want to change {{$admin->status}} status')" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="criteria" value="{{$admin->id}}">
                                                @if($admin->status==1)
                                                    <button name="active" class="btn btn-success btn-xs">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                @else
                                                    <button name="inactive" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>

                                                    @endif
                                                </form>
                                            </td>
                                            <td>
                                                <img src="{{url('backend/images/users/'.$admin->image)}}" width="30" alt="">

                                            <td>{{$admin->created_at}}</td>
                                            <td> <a class="btn btn-info btn-sm btn-xs" href="{{ route('users-details',$admin->id) }}">Show</a></td>

                                            <td>
                                                <a href="{{ route('admin-edit',$admin->id)}}" class="btn btn-success btn-sm btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            <td>
                                                <form action="{{ route('delete', $admin->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <button class="btn btn-danger btn-sm btn-xs" onclick="return confirm('Do you really want to delete {{$admin->name}} sure')"  type="submit">
                                                        <i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                      {{$adminData->links()}}
                                    </div>
                                </div>
                            </class>
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