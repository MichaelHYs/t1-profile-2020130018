<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="style01" type="text/css" href="style01.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>My Portfolio</title>
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
        <div class="container-fluid text-center mb-2 mt-2">
            <a class="btn btn-lg btn-block btn-outline-dark" href="/" role="button">
                Close
            </a>
            <div class="row">
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/03.png" class="card-img-top" alt="Project 12">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 12 (SKETCH)</h5>
                                <p class="card-text">This is my twelth project and the <mark><b>Original one</b></mark>.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 1 days ago</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/01.png" class="card-img-top" alt="Project 11">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 11 (SKETCH)</h5>
                                <p class="card-text">This is my eleventh project and the <mark><b>Original one</b></mark>.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 5 days ago</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/02.png" class="card-img-top" alt="Project 10">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 10 (SKETCH)</h5>
                                <p class="card-text">This is my tenth project and the <mark><b>Original one</b></mark>.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 2 weeks ago</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/7hwdxledj7181.jpg" class="card-img-top" alt="Project 9">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 9</h5>
                                <p class="card-text">This is my nineth project <br><b>Display as sample from outside source</b></br></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 2 weeks ago</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/wp5436684.jpg" class="card-img-top" alt="Project 8">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 8</h5>
                                <p class="card-text">This is my eight project <br><b>Display as sample from outside source</b></br></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 3 weeks ago</small>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div class="card h-100">
                        <img src="/img/c40a4aa6706dc391f861ff152cf811ad.jpg" class="card-img-top" alt="Project 7">
                            <div class="card-body text-dark">
                                <h5 class="card-title">Project 7</h5>
                                <p class="card-text">This is my seventh project <br><b>Display as sample from outside source</b></br></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Added 3 weeks ago</small>
                            </div>
                    </div>
                </div>
                <div class="row collapse" id="more">
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp5068927-pc-anime-hd-wallpapers.jpg" class="card-img-top" alt="Project 6">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 6</h5>
                                    <p class="card-text">This is my sixth project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 3 weeks ago</small>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp5518516-pc-anime-hd-wallpapers.jpg" class="card-img-top" alt="Project 5">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 5</h5>
                                    <p class="card-text">This is my fifth project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 3 weeks ago</small>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp5518412-pc-anime-hd-wallpapers.jpg" class="card-img-top" alt="Project 4">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 4</h5>
                                    <p class="card-text">This is my fourth project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 1 month ago</small>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp4084058.jpg" class="card-img-top" alt="Project 3">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 3</h5>
                                    <p class="card-text">This is my third project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 1 month ago</small>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp5518390-pc-anime-hd-wallpapers.jpg" class="card-img-top" alt="Project 2">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 2</h5>
                                    <p class="card-text">This is my second project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 1 month ago</small>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-1">
                        <div class="card h-100">
                            <img src="/img/wp4928099-pc-anime-hd-wallpapers.jpg" class="card-img-top" alt="Project 1">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Project 1</h5>
                                    <p class="card-text">This is my first project <br><b>Display as sample from outside source</b></br></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Added 1 month ago</small>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-lg btn-block btn-outline-dark mb-2 mt-2" data-bs-toggle="collapse" href="#more" role="button" aria-expanded="false" aria-controls="collapseExample">
                Show more
            </a>
            <a class="btn btn-lg btn-block btn-outline-dark mb-2 mt-2" href="/" role="button">
                Close
            </a>
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
