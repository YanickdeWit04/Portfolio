<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

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
</div>
<div id="content-slider">
  <div class="slider-wrap">

<br>
<br>

    <!-- ===== Thumbnail ControlNav ======= -->
    <input type="radio" id="input-1" name="i" >
    <input type="radio" id="input-2" name="i" >
    <input type="radio" id="input-3" name="i" >
    <input type="radio" id="input-4" name="i" >

    <nav class="slider-dot-control">
      <label for="input-1" class="slider-dot"></label>
      <label for="input-2" class="slider-dot"></label>
      <label for="input-3" class="slider-dot"></label>
      <label for="input-4" class="slider-dot"></label>
    </nav>

    <!-- =================================== -->
    <nav class="slider-arrow-control">
      <label for="input-1"></label>
      <label for="input-2"></label>
      <label for="input-3"></label>
      <label for="input-4"></label>
    </nav>
    <!-- =================================== -->

    <!--    IMAGE NAVIGATION pic -->
    <label id="thumb-1" for="input-1" class="slider-thumb">
      <img src="../images/Mastermind-Beginscherm.jpg" alt="" id="p-1">
      <div class="slider-head">
        <h2>Mindcraft</h2>
        <p>Een moderna draai aan mastermind</p>
        <a href="/mindcraft/nl">lees meer...</a>
      </div>
    </label>

    <label id="thumb-2" for="input-2" class="slider-thumb">
      <img src="../images/pucunia.png" alt="" id="p-2">
      <div class="slider-head">
        <h2>Pecunia - Wallet</h2>
        <p>Jou financieën op één plek!</p>
        <a href="/pecunia/nl">lees meer...</a>
      </div>
    </label>

    <label id="thumb-3" for="input-3" class="slider-thumb">
      <img src="../images/placehold.png" alt="" id="p-3">
      <div class="slider-head">
        <h2>TBC</h2>
        <p>TBC</p>
        <a href="#">read more...</a>
      </div>
    </label>

    <label id="thumb-4" for="input-4" class="slider-thumb" tabindex="13">
      <img src="../images/placehold.png" alt="" id="p-4">
      <div class="slider-head">
        <h2>TBC</h2>
        <p>TBC</p>
        <a href="#">read more...</a>
      </div>
    </label>

    <!-- ===== IMages ======= -->

    <div class="slider">
      <div class="slider-inner">

        <figure>
          <figcaption class="slider-head">
            <h2>Mindcraft</h2>
            <p>Een moderna draai aan mastermind</p>
            <a href="/mindcraft/nl">lees meer...</a>
          </figcaption>
          <img src="../images/Mastermind-Beginscherm.jpg" alt="" id="i-1" class="slider-img">
        </figure>

        <figure>
          <figcaption class="slider-head">
            <h2>Pecunia - Wallet</h2>
            <p>Jou financieën op één plek!</p>
            <a href="/pecunia/nl">lees meer...</a>
          </figcaption>
          <img src="../images/pucunia.png" alt="" id="i-2" class="slider-img">
        </figure>

        <figure>
          <figcaption class="slider-head">
            <h2>TBC</h2>
            <p>TBC</p>
            <a href="#">read more...</a>
          </figcaption>
          <img height="902" width="1899" src="../images/placehold.png" alt="" id="i-3" class="slider-img">
        </figure>

        <figure>
          <figcaption class="slider-head">
            <h2>TBC</h2>
            <p>TBC</p>
            <a href="#">FIND OUT MORE</a>
          </figcaption>
          <img height="902" width="1899" src="../images/placehold.png" alt="" id="i-4" class="slider-img">
        </figure>


        <figure>
          <figcaption class="slider-head">
            <h2>TBC</h2>
            <p>TBC</p>
            <a href="#">read more...</a>
          </figcaption>
          <img height="902" width="1899" src="../images/placehold.png" alt="" id="i-5" class="slider-img">
        </figure>
      </div>
    </div>

  </div>
</div>
</body>
</html>
