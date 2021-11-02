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
</head>
<body>
   <!---Dit is het hele groene gedeelte van de website, Dus de Navbar, de titel en de dropdown menu.--->
<body>
    <div class="top-bar">
        <div class="titel">
            <h1>Yanick de Wit</h1>
            <div class="navbar">
                <a class="margin-nav-bar" href="/home/nl=nl">Home</a>
                <a class="margin-nav-bar" href="/overmij">over mij</a>
                <a class="margin-nav-bar" href="/cv">cv</a>
                <a class="margin-nav-bar" href="/contact">contact</a>
                <div class="dropdown">
                    <button class="dropbtn">Projecten
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="/portfolio">Deze Website</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<body>
    <div class="mobile">
        <input type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
          <header>My Menu</header>
          <a href="#" class="active">
            <i class="fas fa-qrcode"></i>
            <span>Dashboard</span>
          </a>
          <a href="#">
            <i class="fas fa-link"></i>
            <span>Shortcuts</span>
          </a>
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Overview</span>
          </a>
          <a href="#">
             <i class="fas fa-calendar"></i>
            <span>Events</span>
          </a>
          <a href="#">
            <i class="far fa-question-circle"></i>
            <span>About</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
        </div>
    </body>
    </html>
</div>
@yield('content')

