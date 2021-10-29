<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="E:\School\Software Developer\websites\Portfolio\public\images\icon.jpg">
</head>
<!---Dit is het hele groene gedeelte van de website, Dus de Navbar, de titel en de dropdown menu.--->
<body>
    <div class="top-bar">
        <div class="titel">
            <h1>Yanick de Wit</h1>
            <div class="navbar">
                <a class="margin-nav-bar" href="/home/en=en">home</a>
                <a class="margin-nav-bar" href="/aboutme">about me</a>
                <a class="margin-nav-bar" href="/cv/en">cv</a>
                <a class="margin-nav-bar" href="/contact/en">contact</a>
                <div class="dropdown">
                    <button class="dropbtn">projects
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/portfolio/en">this Website</a>
                        <a href="#">placeholder #1</a>
                        <a href="#">placeholder #2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@yield('contenten')
