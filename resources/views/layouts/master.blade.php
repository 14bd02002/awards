<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Games</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/default.css" rel="stylesheet">   
    <link href="/css/sticky-footer.css" rel="stylesheet">
</head>
 
<body>
 
 <div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <a href="/"><img src="/images/giveaway.png" alt="" width="170px" height="30px"></a></img>
        </div>
        <div id="menu">
            <ul>

                <li role="presentation"><a href="/awards">List awards</a></li>
                @if( auth()->check() )
                <li role="presentation"><a href="#">Hi {{ auth()->user()->name }}</a></li>
                <li role="presentation"><a href="/logout">Log Out</a></li>
                @else
                <li role="presentation"><a href="/login">Log In</a></li>
                <li role="presentation"><a href="/register">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>


<div class="container">
    @yield('content')
</div>
 
 
<script src="/js/jquery-3.1.1.slim.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
