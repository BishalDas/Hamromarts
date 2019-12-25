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
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col col-md-6 col-md-offset-3" >
            <div class="panel panel-primary" style="margin-top: 100px;">
                <div class="panel-heading">
                    <h3 class="panel-title"> User Login</h3>
                </div>
                <div class="panel-body">
                    @include('backend.layouts.messages')
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group form-group-sm">
                            <lable for="username">Username</lable>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                            <a href="" style="color: red;">{{$errors->first('username')}}</a>
                        </div>
                        <div class="form-group form-group-sm">
                            <lable for="password">Password</lable>
                            <input type="password" name="password" class="form-control" id="myInput" placeholder="Enter your password">
                            <a href="" style="color: red;">{{$errors->first('password')}}</a>
                        </div>
                        <input type="checkbox" onclick="myFunction()">Show Password

                        <div class="form-group form-group-sm">
                            <div class="form-group form-group-sm">
                                <button class="btn btn-success btn-xs ">Login</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{url('password-reset')}}">Forget Password?</a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-md-12" >
    <div class="col-md-5"></div>
    <div class="col-md-2">New to site?
        <a href="{{route('user-register')}}">Create Account</a>
    </div>
    <div class="col-md-5"></div>

</div>

</body>
</html>
