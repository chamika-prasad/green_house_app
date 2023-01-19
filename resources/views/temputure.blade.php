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

      <!-- Charting library -->
      <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
      <!-- Chartisan -->
      <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <title>Document</title>
</head>
<body style="background-image: url('pexels-martin-péchy-1028223.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center;">

<h1 style="text-align:left; margin-top:1cm; margin-left:1cm; font-weight: bold; font-size: 60px; -webkit-text-stroke: 1px white;">PLANT MONITORING SYSTEM</h1>
    <div class="container">

    <div style="width:1000px; text-align:center; margin-left:4cm; margin-top:3cm; padding-top:2cm; opacity:0.8; background-color: white;">

        <!-- here your chart-->
        <div id="chart" style="height: 300px; width:1000px;"></div>

</div>


    </div>

    <script>
        const chart = new Chartisan({
          el: '#chart',
          data: {!! $chart !!},
          hooks: new ChartisanHooks()
          .title({
            textAlign: 'center',
            left: '50%',
            text: 'Temparature Vs Time',
          })
          .colors('rgba(0,0,0,.4)')
          .datasets('line')
          .axis(true)
          .tooltip()
        });
    </script>
    
</body>
</html>