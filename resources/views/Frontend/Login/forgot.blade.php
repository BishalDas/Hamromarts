<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/forgot_password')}}">
    {{csrf_field()}}

    @if(session('error'))
        <div>{{session('success')}}</div>
    @endif
    @if(session('success'))
        <div>{{session('success')}}</div>
    @endif

    <input type="email" name="email" id="email">
    <button type="submit">submit</button>
</form>

</body>
</html>
