
<!DOCTYPE html>
<html lang="de">
<head>

    <link rel="stylesheet" type="text/css" href='/main.css'>
    <style>
        main{
            display: grid;
            place-content: center;
        }

        footer{
            display: flex;
            flex-direction: row;

        }
    </style>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
</head>
<body>

<header>
    @section('header')

    @show

</header>
<main>
    <div>
       <h2>@yield('überschrift')</h2>
    </div>

    @section('main-content')
    @show
</main>
<footer id="footer">

    <p>&copy E-Mensa GmbH</p>
    <p>Schwarz, Slusarczyk</p>
    <p><a href="http://localhost:8080">Impressum</a></p>
    @section('footer')
    @show
</footer>
</body>
</html>