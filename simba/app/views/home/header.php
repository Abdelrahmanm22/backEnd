<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/976c81fa65.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=PATH;?>front/css/animate.css">
        <link rel="stylesheet" href="<?=PATH;?>front/css/bootstrap.css">
        <link rel="stylesheet" href="<?=PATH;?>front/css/main.css">
        <title><?=$data['title']?></title>
    </head>
    <body>
      <!-- navv code -->
        <div class="navv">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"><img class="navLogo" src="<?=PATH."img/".$data["logo"]?>" alt="logo"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#Services">Services</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#Works">Works</a>
                              </li>
                              <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#works" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Works
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li> -->
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                              </li>
                              
                              
                            </ul>
                            
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>