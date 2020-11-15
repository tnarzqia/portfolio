<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Style_porpolio.css">

    <style>
        .navbar-brand,h3, h2{
            font-family: 'Lobster', cursive;
            font-size: 40px;
        }
        h6{
            font-family: 'Lobster', cursive;
            font-size: 30px;
        }
        .nav-link{
            font-family: 'Lobster', cursive;
            font-size: 20px;
        }


    </style>
    
    <title>My Portfolio</title>
</head>
<body>
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top pl-4 pr-4">
            <a class="navbar-brand mb-0 h1 text-success" href="#">TinaRizqiana</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Bawah Navbar-->
        <main role="main">
 
        <div id="demo" class="carousel slide" data-ride="carousel">
    
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active img-fluid">
                    <img class="d-block w-100" src="img/3.jpg" alt="Gambar - 1" width="100%" height="600">
                    <div class="carousel-caption">
                        <h3>My Portfolio</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img  class="d-block w-100" src="img/3.jpg" alt="Gambar - 2" width="100%" height="600">
                    <div class="carousel-caption">
                        <h3>My Portfolio</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/3.jpg" alt="Gambar - 3" width="100%" height="600">
                    <div class="carousel-caption">
                        <h3>My Portfolio</h3>
                        
                    </div>
                </div>
                  <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                </div>
        </div>

       
    <section id="about" class="about shadow-sm pb-2">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <img src="img/saya.JPG" class="img-fluid rounded-circle" width="25%" alt="Responsive image">
                <h3 class="pt-2">Tina Rizqiana</h3>
                <p class="lead">Mahasiswa STMIK Karawang</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row mt-4 mb-4">
                <div class="col text-center">
                    <h2 class="portfolio1">Portfolio</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 pb-4">
                    <div class="card shadow bg-white rounded">
                        <img class="card-img-top" src="img/apar.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text text-center"> Sistem Informasi Monitoring Alat Pemadam Api dan Fire Alarm</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pb-4">
                    <div class="card shadow bg-white rounded">
                        <img class="card-img-top" src="img/surat.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text text-center pb-4"> Sistem Informasi Surat Disposisi
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow bg-white rounded">
                        <img class="card-img-top" src="img/pasien.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text text-center"> Sistem Informasi Pendaftaran Pasien
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact bg-primary shadow-sm bg-success">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 pb-4 text-center">
                    <h2>Contac</h2>
                </div>
                <div class="col-md-4 pb-4">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block">Submit</button>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <div class="sosialMedia" id="sosialMedia">
                        <a href="#"><i class="instagram fab fa-instagram fa-2x text-dark pr-3"></i></a>
                        <a href="#"><i class="gituhub fab fa-github fa-2x text-dark pr-3"></i></a>
                        <a href="#"><i class="twitter fab fa-twitter fa-2x text-dark"></i></a>
                        <a href="#"><i class="facebook fab fa-facebook-f fa-2x text-dark"></i></a>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
         <!-- FOOTER -->
      <footer class="container">
        <p style="text-align: center;" class="mt-5">&copy; 2020 | Portfolio  </p>
      </footer>

            <!--<h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
       
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>