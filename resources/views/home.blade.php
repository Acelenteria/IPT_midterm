<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="vieport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PRELIM APP</title>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="text-center">
        <div class="card shadow-sm mx-auto" style="width: 1000px">
            <div class="card-body">
                <div class="card-title"><h1>WELCOME!</h1></div>
            <nav>
            <a href="{{url('/PersonalWeb')}}"><h4>Information about me!</h4></a>
            <a href="{{url('/OtherInfo')}}"><h4>Others</h4></a>
            <a href="{{url('/')}}"><h4>Click to Proceed Home</h4></a>
    

            </nav>
        </div>    
    </body>
</html>
