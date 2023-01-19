<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter values</h1>

    @if(session('status'))

        <h4>{{session('status')}}</h4>

    @endif


    <form action="{{url('submit')}}" method="POST">
        @csrf

        <input type="decimal" name="light" placeholder="light">
        <input type="decimal" name="temperature" placeholder="temperature">
        <input type="decimal" name="humidity" placeholder="humidity">
        <input type="decimal" name="moisture" placeholder="moisture">
        <input type="decimal" name="ph" placeholder="ph">
        <button type="submit">submit</button><br><br>
    </form>

</body>
</html>