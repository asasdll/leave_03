<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon_i2.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>leave</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ URL::to('/') }}/assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ URL::to('/') }}/assets2/css/demo.css" rel="stylesheet" />
    <!-- CSS Files -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
h5 {
    text-align: center;
    font-family: "Times New Roman", Times, serif;
    color:#FF0000;

}
</style>
</head>

<body>
<div class="wrapper">
       
            @yield('content')
            

           

</div>

</body>
<!--   Core JS Files   -->
<script src="{{ URL::to('/') }}/assets2/js/core/jquery.3.2.1.js" type="text/javascript"></script>
<script src="{{ URL::to('/') }}/assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ URL::to('/') }}/assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!--  Chartist Plugin  -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ URL::to('/') }}/assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript">
</script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::to('/') }}/assets2/js/demo.js"></script>


</html>