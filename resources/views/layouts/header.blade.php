<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Holiday Crown | Best hotel in Dubai</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body id="home">
    @section('slidebar')
    <!-- header -->
    <nav class="navbar  navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/logo.png')}}"  alt="holiday crown"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li><a href="{{route('index')}}">Home </a></li>
                    <li><a href="#rooms-tariff.php">Rooms & Tariff</a></li>
                    <li><a href="#introduction.php">Introduction</a></li>
                    <li><a href="#gallery.php">Gallery</a></li>
                    <li><a href="#contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @show

    @yield('content')

    <!-- header -->
</body>
</html>
