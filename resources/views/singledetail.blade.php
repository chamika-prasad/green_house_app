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


<div style="width:40%; text-align:center; margin-left:13cm; margin-top:5cm; opacity:0.8">
    <table class="table table-dark table-striped">
        <thead>
            <tr>

                <th>#</th>
                <th>Datetime</th>
                <th>{{$name}}</th>

            </tr>
        </thead>
        <tbody>

                @foreach ($details as $detail)
                
            <tr>

                <td>{{$detail[0]}}</td>
                <td>{{$detail[1]}}</td>
                <td>{{$detail[2]}}</td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>



</body>
</html>