<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body style="background-image: url('pexels-martin-péchy-1028223.jpg'); background-size: auto;background-repeat: no-repeat;background-position: center;">

<h1 style="text-align:left; margin-top:1cm; margin-left:1cm; font-weight: bold; font-size: 60px; -webkit-text-stroke: 1px white;">PLANT MONITORING SYSTEM</h1>

<div class="row" style="margin-left:3cm; margin-right:3cm; margin-top:1cm">

<div class="row">


    <div class="col-sm-2 display-3"><span style="color:white; font-weight: bold">{{$details[1]}}'C</span></div>
    <div class="col-sm-2 display-3"><span style="color:white; font-weight: bold">{{$details[2]}}%</span></div>
    <div class="col-sm-2 display-3"><span style="color:white; font-weight: bold">{{$details[4]}}%</span></div>
    <div class="col-sm-2 display-3"><span style="color:white; font-weight: bold">{{$details[3]}}%</span></div>
    <div class="col-sm-2 display-3"><span style="color:white; font-weight: bold">{{$details[5]}}%</span></div>
    

</div>

<div class="row" style="margin-top:0.3cm">

    <div class="col-sm-2" style="padding-left:17px"><span style="color:white; font-size:25px">Temperature</span></div>
    <div class="col-sm-2" style="padding-left:37px"><span style="color:white; font-size:25px">Humidity</span></div>
    <div class="col-sm-2" style="padding-left:55px"><span style="color:white; font-size:25px">Light</span></div>
    <div class="col-sm-2" style="padding-left:40px"><span style="color:white; font-size:25px">Moisture</span></div>
    <div class="col-sm-2" style="padding-left:65px"><span style="color:white; font-size:25px;">PH</span></div>

</div>

<div class="row" style="margin-top:0.3cm">

    <div class="col-sm-2"><button class="col-sm-2 btn btn-dark" style="width:4cm; border-color: white;"><span style="color:white; font-size:25px"><a href="{{url('/single','temperature')}}" style="text-decoration: none; color:white;">Details</a></span></button></div>
    <div class="col-sm-2"><button class="col-sm-2 btn btn-dark" style="width:4cm; border-color: white;"><span style="color:white; font-size:25px"><a href="{{url('/single','humidity')}}" style="text-decoration: none; color:white;">Details</a></span></button></div>
    <div class="col-sm-2"><button class="col-sm-2 btn btn-dark" style="width:4cm; border-color: white;"><span style="color:white; font-size:25px"><a href="{{url('/single','light')}}" style="text-decoration: none; color:white;">Details</a></span></button></div>
    <div class="col-sm-2"><button class="col-sm-2 btn btn-dark" style="width:4cm; border-color: white;"><span style="color:white; font-size:25px"><a href="{{url('/single','moisture')}}" style="text-decoration: none; color:white;">Details</a></span></button></div>
    <div class="col-sm-2"><button class="col-sm-2 btn btn-dark" style="width:4cm; border-color: white;"><span style="color:white; font-size:25px"><a href="{{url('/single','ph')}}" style="text-decoration: none; color:white;">Details</a></span></button></div>

</div>

</div>

<div class="row" style="margin-top:1.5cm; margin-right:0.5cm; height:1.3cm"><button class="col-3" style="border-radius: 0px 25px 25px 0px; background-color:#064F3B; border-color: white;"><a href="{{url('/analys')}}" style="text-decoration: none; color:white;"><h1 style="color:white">Analysis</h1></a></button></div>
<div class="row" style="margin-top:0.5cm; margin-right:0.5cm; height:1.3cm"><button class="col-3" style="border-radius: 0px 25px 25px 0px; background-color:#064F3B; border-color: white;"><a href="{{url('/compare')}}" style="text-decoration: none; color:white;"><h1 style="color:white">Compare</h1></a></button></div>
<div class="row" style="margin-top:0.5cm; margin-right:0.5cm; height:1.3cm;"><button class="col-3" style="border-radius: 0px 25px 25px 0px; background-color:#064F3B; border-color: white;"><a href="{{url('/signin')}}" style="text-decoration: none; color:white;"><h1 style="color:white">Log Out</h1></button></div>

<div class="row" style="margin-top:1.5cm; margin-right:0cm; margin-left:35cm; height:1.3cm;"><button  style="border-radius: 25px 0px 0px 25px; background-color:red; border-color: white; width:12cm"><a href="{{url('/refersher')}}" style="text-decoration: none; color:white;"><h1 style="color:white">Reset Data</h1></a></button></div>
<div class="row" style="margin-top:0.9cm; margin-right:0cm; margin-left:31.6cm; height:1.3cm;"><h2 style="color:white">Last Update {{$details[0]}}</h2></div>



</body>
</html>