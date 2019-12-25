<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="{{url('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3" >
            <div class="panel panel-primary" style="margin-top: 100px;">
                <div class="panel-heading">
                    <h3 class="panel-title"> User register</h3>
                </div>
                <div class="panel-body">
                    <form action="{{route('user-register')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group form-group-sm">
                            <lable for="name">Name</lable>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Enter your name">
                            <a href="" style="color: red;">{{$errors->first('name')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <lable for="username">Username</lable>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                            <a href="" style="color: red;">{{$errors->first('username')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <lable for="email">Email</lable>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                            <a href="" style="color: red;">{{$errors->first('email')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <lable for="password">Password</lable>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                            <a href="" style="color: red;">{{$errors->first('password')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <lable for="password_confirmation">Confirm Password</lable>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{old('password')}}"
                                   placeholder="Please Confirm your password">
                            <a href="" style="color:red">{{$errors->first('password_confirmation')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <button class="btn btn-success">Register</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-md-12" >
    <div class="col-md-5"></div>
    <div class="col-md-2">Already a member?
        <a href="{{route('login')}}">Login</a>
    </div>
    <div class="col-md-5"></div>

</div>

</body>
</html>
