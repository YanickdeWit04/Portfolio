<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="..\">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4617838006860549"
     crossorigin="anonymous"></script>
</head>
<body>
   <!---Dit is het hele groene gedeelte van de website, Dus de Navbar, de titel en de dropdown menu.--->
<body>
    <div class="top-bar">
        <div class="titel">
            <a class="titelh1" href="/home"><h1>Yanick de Wit</h1></a>
            <div class="navbar">
                <a class="margin-nav-bar" href="/home">home</a>
                <a class="margin-nav-bar" href="/overmij">over mij</a>
                <a class="margin-nav-bar" href="/cv">cv</a>
                <a class="margin-nav-bar" href="/contact">contact</a>
                <div class="dropdown">
                    <button class="dropbtn">Projecten
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/projectengrid">alle projecten</a>
                        <a href="/portfolio">deze Website</a>
                        <a href="/mindcraft/nl">mindcraft</a>
                        <a href="/pecunia/nl">pecunia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile">
        <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
          <header>Yanick de Wit</header>
          <a href="/home/nl=nl" class="active">
            <i class="fas fa-qrcode"></i>
            <span>home</span>
          </a>
          <a href="/overmij">
            <i class="fas fa-link"></i>
            <span>over mij</span>
          </a>
          <a href="/cv">
            <i class="fas fa-stream"></i>
            <span>cv</span>
          </a>
          <a href="/contact">
             <i class="fas fa-calendar"></i>
            <span>contact</span>
          </a>
          <a href="/projectengrid">
            <i class="far fa-question-circle"></i>
            <span>projecten</span>
          </a>
        </div>
    </body>
    </html>
</div>
@yield('content')

