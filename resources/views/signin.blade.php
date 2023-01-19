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
<body style="background-image: url('pexels-martin-péchy-1028223.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center;">

<h1 style="text-align:center; margin-top:2cm; font-weight: bold; font-size: 60px; -webkit-text-stroke: 1px white;">PLANT MONITORING SYSTEM</h1>

@if(session('status'))

<h4>{{session('status')}}</h4>

@endif

<section class="vh-95 gradient-custom" style="opacity:0.8; margin-top:1cm;">
  <div class="container py-5 h-95" >
    <div class="row justify-content-center align-items-center h-95" >
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5" style="text-align:center">Sign In</h3>
            <form action = "{{url('signin')}}" method = "POST">
             @csrf
              <div class="row" >
                <div class="col-md-12 mb-4" style="padding-left:2.5cm; padding-right:2.5cm">

                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" name="email" required/>
                  </div>
                  

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-4 pb-2" style="padding-left:2.5cm; padding-right:2.5cm">

                  <div class="form-outline">
                    <input type="password" id="password" class="form-control form-control-lg" placeholder="password" name="password" required/>

                  </div>

                </div>

              </div>
              <div class="row">
                <div class="col-md-12 mb-4 pb-2" style="padding-left:2.5cm; width:6cm;">
                  <div class="form-outline">
                <input class="btn btn-primary btn-lg" type="submit" value="Login" style = "width:12.8cm ;opacity:3"/>
                </div>
              </div>
            </div>

                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>