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
    <script>if(location.href.contains("newdeveloper.nl")) location.href = "https://steansupport.nl/"</script>
</head>
<body>
   <!---Dit is het hele groene gedeelte van de website, Dus de Navbar, de titel en de dropdown menu.--->
<body>
    <div class="top-bar">
        <div class="titel">
            <h1>Yanick de Wit</h1>
            <div class="navbar">
                <a class="margin-nav-bar" href="/home/nl=nl">home</a>
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
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
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

