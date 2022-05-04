
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Pagina</title>
    <link rel="stylesheet" href="css/newhome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
            <a class="navbar-brand" style="color: white" href="#">Yanick de Wit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a style="color: Gray" class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: Gray" class="nav-link" href="#about">Over mij</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: Gray" class="nav-link" href="#projects">Projecten</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: Gray" class="nav-link" href="#portfolio">CV</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: Gray" class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
     <!-- main banner -->
     <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h2 class="hero_title">Hallo! Ik ben Yanick.</h2>
                <p class="hero_desc">Ik ben student Software Developer.</p>
            </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">Over Mij</h1>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <img src="images/ik2.png" class= "imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li><strong>Naam:</strong> Yanick de Wit</li>
                                <li><strong>Leeftijd:</strong> 17</li>
                                <li><strong>Hobbies:</strong> Simracen, gamen, autosport, uit gaan met vrienden.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p> Mijn naam is Yanick de Wit en ik ben een vrolijk jonge van 17 jaar. Ik ben geboren in het kleine stadje Genemuiden in Overijssel. Ik woon nog steeds hier samen met mijn vader, moeder en broertje van 14. Sinds jonge leeftijd mocht ik graag bezig zijn met computers en software en zo kom ik ook op de opleiding Software Developer bij LandstedeMBO Zwolle. Mijn hobbies zijn gamen, met vrienden uitgaan/stappen, auto's, autosport en computers/ICT. Simracen vind ik ook erg mooi om te doen en zo speel ik dan ook vaak toernooien in games zoals Assetto Corsa Competizione. Verder werk ik ook nog bij de Albert Heijn in Genemuiden en ga ik met plezier naar school.
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- portfolio section-->
    <section id="projects">
        <div class="container mt-3">
            <h1 class="text-center">Projecten</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="../images/Mastermind-Beginscherm.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">MindCraft</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="../images/pucunia.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Pecunia - Wallet</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        <img class="card-img-top" src="images/placehold.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Dummy</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="../images/Mastermind-Beginscherm.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">MindCraft</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="../images/Mastermind-Beginscherm.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">MindCraft</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="../images/Mastermind-Beginscherm.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">MindCraft</h4>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Github</a>
                                <a href="#" class="btn btn-success">Live versie</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> --}}
    </section>
    <section id="contact">
    </section>
     <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/profile.php?id=100009652094387" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/dewityanick/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/yanick-de-wit-1a8569222/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.steamcommunity.com/id/zaadinternet" target="_blank"><i class="fab fa-steam"></i></a>
                <a href="https://github.com/YanickdeWit04" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
