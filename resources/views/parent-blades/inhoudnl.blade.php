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
                <a class="margin-nav-bar" href="/">Home</a>
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
                <div class="dropdown">
                    <button class="dropbtn">inloggen
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <form method="POST">
                        @csrf
                        <input placeholder="username" type="text" name="username">
                        <input placeholder="password" type="password" name=wachtwoord>
                        <input type="submit" value="opslaan">
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@yield('content')

</body>

</html>