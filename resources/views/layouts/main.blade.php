<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section('head')
        <link href="{{URL::asset('/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{URL::asset('/fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/imagehover.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        @show
</head>
<body>
@include('inc.navigation')
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
@yield('body')

@include('inc.footer')
@yield('javascriptfiles')

</body>
</html>