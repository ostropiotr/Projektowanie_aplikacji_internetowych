<!DOCTYPE html>
<html lang="pl">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h5 { font-family: "Raleway", sans-serif }
        body, html { height: 100%; margin: 0; }
        .bgimg { background-image: url('https://www.w3schools.com/w3images/onepage_restaurant.jpg'); min-height: 100%; background-position: center; background-size: cover; }
        .res-box { background: rgba(0,0,0,0.7); padding: 20px; border-radius: 10px; border: 1px solid white; margin-top: 20px; }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>