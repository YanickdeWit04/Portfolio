<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="E:\School\Software Developer\websites\Portfolio\public\images\icon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4617838006860549"
     crossorigin="anonymous"></script>
</head>
<!---Dit is het hele groene gedeelte van de website, Dus de Navbar, de titel en de dropdown menu.--->
<body>
    <div class="top-bar">
        <div class="titel">
            <a class="titelh1" href="/home/en=en"><h1>Yanick de Wit</h1></a>
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
                        <a href="/projectsgrid">all projects</a>
                        <a href="/portfolio/en">this website</a>
                        <a href="#">placeholder #1</a>
                        <a href="#">placeholder #2</a>
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
          <a href="/home/en=en" class="active">
            <i class="fas fa-qrcode"></i>
            <span>home</span>
          </a>
          <a href="/aboutme">
            <i class="fas fa-link"></i>
            <span>about me</span>
          </a>
          <a href="/cv/en">
            <i class="fas fa-stream"></i>
            <span>cv</span>
          </a>
          <a href="/contact/en">
             <i class="fas fa-calendar"></i>
            <span>contact</span>
          </a>
          <a href="/projectsgrid">
            <i class="far fa-question-circle"></i>
            <span>projects</span>
          </a>
        </div>
    </body>
    </html>
</div>
@yield('contenten')
