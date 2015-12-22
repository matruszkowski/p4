<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Project Flyer</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/libs.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Sandstone theme from https://www.bootstrapcdn.com/bootswatch/ -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha256-gJ9rCvTS5xodBImuaUYf1WfbdDKq54HCPz9wk8spvGs= sha512-weqt+X3kGDDAW9V32W7bWc6aSNCMGNQsdOpfJJz/qD/Yhp+kNeR+YyvvWojJ+afETB31L0C4eO0pcygxfTgjgw==" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Real Estate Manager - REM/a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Tasks</a></li>
                <li><a href="#about">Projects</a></li>
                <li><a href="#contact">Clients</a></li>
                <li><a href="#contact">Companies</a></li>
                <li><a href="#contact">Bulidings</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="/js/libs.js"></script>
@yield('scripts.footer')

@include('flash')

</body>
</html>
