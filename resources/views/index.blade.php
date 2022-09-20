<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="style01" type="text/css" href="style01.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark ">
        <div class="container-fluid justify-content-center" >
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#SideMenu" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span> <b>Menu</b>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="SideMenu" aria-labelledby="SideMenuHead">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="SideMenuHead">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-dark">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="btn d-grid btn-block btn-outline-light my-2" href="/" role="button">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn d-grid btn-block btn-outline-light my-2" href="/portfolio" role="button">
                        Project
                    </a>
                </li>
                <li class="nav-item">
                  <a class="btn d-grid btn-block btn-outline-light my-2" href="#service" id="SideMenu" data-bs-toggle="collapse" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                  </a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
    </nav>
    <div class="collapse row text-center" id="service">
        <div class="col-md-4 my-1">
            <div class="card h-100 text-dark">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Standard</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Rp10.000<br>to</br>Rp15.000</h1>
                    <ul class="list-unstyled">
                        <li>✓ <b>Normal</b> quality</li>
                        <li>✓ Basic/Simple graphic design</li>
                        <li>✓ 5 Revisions</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-success">Order</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-1">
            <div class="card h-100 text-dark border-success">
                <div class="card-header py-3 bg-success border-success">
                    <h4 class="my-0 fw-normal text-light">Premium</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Rp20.000<br>to</br>Rp55.000</h1>
                    <ul class="list-unstyled">
                        <li>✓ <b>High</b> quality</li>
                        <li>✓ Detailed graphic design</li>
                        <li>✓ 15 Revisions</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-warning">Order</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 my-1">
            <div class="card h-100 text-dark border-warning">
                <div class="card-header py-3 bg-warning border-warning">
                    <h4 class="my-0 fw-normal">Gold</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Rp70.000<br>to</br>Rp150.000</h1>
                    <ul class="list-unstyled">
                        <li>✓ <b>Normal</b> quality</li>
                        <li>✓ Basic/Simple graphic design + Concepts</li>
                        <li>✓ 2D + 3D Mockups</li>
                        <li>✓ <b>Unlimited</b> Revisions</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-danger">Order</button>
                </div>
            </div>
        </div>
      </div>
    <div id="mainMenu" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainMenu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainMenu" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainMenu" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="/img/2029165.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="display-4">Hi, My name is Michael Hansel Yapsie</h1>
                  <p>and This is my Portfolio</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/pixel-art-wallpaper-full-hd-1920x1080-110940 (1).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Recent Projects</h1>
                  <p>These are Project I've made (SKETCH)</p>
                  <a class="btn btn-lg btn-block btn-outline-light" href="/portfolio" role="button">
                    Show
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/12889.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Services</h1>
                  <p>list</p>
                  <div class="row text-center">
                    <div class="col-md-4 my-1">
                        <div class="card h-100 text-dark">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Standard</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">Rp10.000<br>to</br>Rp15.000</h1>
                                <ul class="list-unstyled">
                                    <li>✓ <b>Normal</b> quality</li>
                                    <li>✓ Basic/Simple graphic design</li>
                                    <li>✓ 5 Revisions</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-success">Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100 text-dark border-success">
                            <div class="card-header py-3 bg-success border-success">
                                <h4 class="my-0 fw-normal text-light">Premium</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">Rp20.000<br>to</br>Rp55.000</h1>
                                <ul class="list-unstyled">
                                    <li>✓ <b>High</b> quality</li>
                                    <li>✓ Detailed graphic design</li>
                                    <li>✓ 15 Revisions</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-warning">Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100 text-dark border-warning">
                            <div class="card-header py-3 bg-warning border-warning">
                                <h4 class="my-0 fw-normal">Gold</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title">Rp70.000<br>to</br>Rp150.000</h1>
                                <ul class="list-unstyled">
                                    <li>✓ <b>Normal</b> quality</li>
                                    <li>✓ Basic/Simple graphic design + Concepts</li>
                                    <li>✓ 2D + 3D Mockups</li>
                                    <li>✓ <b>Unlimited</b> Revisions</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-danger">Order</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainMenu" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainMenu" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="collapse my-1" id="art" >

        </div>
    <div class="bg-dark my-0">
        <div class="collapse my-1 container" id="info" >
            <div class="bg-dark text-light py-1">
                <h2>About Me</h2>
                <p class="text-justify">Personally, I consider myself as an artist. A Teenager that enjoy drawing what he saw.
                    I am maybe still langking know how about art but still i keep trying</p>
                <figure class="text-center">
                    <blockquote class="blockquote">
                      <p>Creativity takes courage.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      <cite title="Source Title">Henri Matise</cite>
                    </figcaption>
                </figure>
            </div>

        </div>

        <div class="collapse container-fluid py-1 bg-dark text-white text-center" id="info">
            <div class="container mb-5">
                <div class="text-center my-3">
                    <h6>Contacts</h6>
                    <a class="btn btn-secondary btn-lg " href="#" role="button" title="michael.hansel26@gmail.com">
                      <i class="fa fa-envelope"></i> Email
                    </a>
                    <a class="btn btn-info btn-lg text-light" href="#" role="button" title="Twitter">
                      <i class="fa fa-twitter"></i> Twitter
                    </a>
                    <a class="btn btn-primary btn-lg" href="#" role="button" title="Facebook">
                      <i class="fa fa-facebook"></i> Facebook
                    </a>
                    <a class="btn btn-danger btn-lg" href="#" role="button" title="YouTube">
                      <i class="fa fa-youtube"></i> YouTube
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid py-1 bg-dark text-white text-center">
            <a>
                <h6>Made by Michael Hansel Yapsie</h6>
                <h6>NPM : 2020130018</h6>
            </a>
            <a class="btn btn-lg btn-block btn-outline-light" data-bs-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-question"></i> About me
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
