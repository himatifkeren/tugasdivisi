<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOVIE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8b969e22b4.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">WPU <span class="food">Movie</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#home"><span class="food">Home</span> </a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#about">Search</a>
              </div>
            </li>
            <a class="nav-item nav-link active" href="#story">Story </a>
            <a class="btn btn-primary btn-lg btn-menu" href="#cta" role="button">Contact</a>
          </div>
        </div>
     </div>
    </nav>
    <!-- Header -->

    <!-- Hero Image -->
    <div class="jumbotron" id="home">
       <div class="dark">
          <div class="text-center">
            <h1 class="display-4">Welcome To The WPU <span class="food">Movie</span></h1>
            <p class="lead">People Who Love To Wacth Are Always The Best People</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg btn-menu" href="#" role="button">View Movie</a>
            </p>
          </div>
        </div>
       <!-- Supcription Form -->
        <div class="subscribe">
          <div class="container responsive">
            <h2 class="text-center" style="padding-bottom: 10px;">Subscribe to get a new movie</h2>
            <div class="row">
              <div class="col-lg-4">
                <input type="text" class="form-control bg-transparent" placeholder="Name"> 
              </div>
              <div class="col-lg-4">
                <input type="text" class="form-control bg-transparent" placeholder="Email"> 
              </div>
              <div class="col-lg-4">
                  <a class="btn btn-block btn-subscribe" role="button">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    <!-- About -->
    <p class="about text-center" id="about">Search Movie</p>
    <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-8">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Movie Title" id="search-input">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="search-button">Search</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row" id="movie-list">
               
            </div>
        </div>
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Movie Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>

    <!-- <div class="container">
      <div class="row">
        <div class="col text-center">
            <h5>Welcome To</h5>
            <p class="navbar-brand" href="#">Restaurant <span class="food">Foods</span></p>
            <p class="deskripsi">People love to eat food outside in a restaurant. Its become a craze.<br>
               As increasing numbers of consumers want to set out <br>
               or take prepared food home, the number of food-service <br>
               has skyrocketed. if you are Good Foodie and have a cut <br>
                to make some delicious food then its a very good business <br>
                 opportunity to earn handsome profits.</p>
        </div>
        <div class="col">
          <img src="img/background5.jpg" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div> -->

    
    <!-- STORY -->
    <div class="story" id="story">
      <div class="dark">
         <div class="text-center">
           <p class="navbar-brand" href="#">WPU <span class="food">Movie</span></p>
           <p class="lead" style="margin-top:-30px;">Discover</p>
           <p class="recipes">Our Story</p>
         </div>
       </div>
    </div>
    <div class="container text-center" style="margin-bottom: 60px;">
      <div class="row">
        <div class="col">
          <img src="img/potret1.jpg" class="img-thumbnail banner" alt="...">
        </div>
        <div class="col">
          <img src="img/potret2.jpg" class="img-thumbnail banner" alt="...">
        </div>
        <div class="col-7 ">
          <p class="navbar-brand" href="#">WPU <span class="food">Movie</span></p>
          <p class="menus">The Experience</p>
          <p class="deskripsi">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                 It has survived not only five centuries, but also the leap into electronic typesetting, 
                 remaining essentially unchanged. It was popularised in the 1960s with the release of 
                 Letraset sheets containing Lorem Ipsum passages,</p>
             <a href="#" class="view-menu">Read More</a>
        </div>
      </div>
    </div>

    <!-- Click to Action -->
      <div id="cta">
          <div class="dark-overlay">
              <div class="cloud-overlay">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 mx-auto text-center">
                              <h3 class="display-4">WPU <span class="food">Movie</span></h3>
                              <h5>WPU Movie!! Now That Your Movie<br>have Grown Up!</h5>
                              <h3 style="color: aliceblue;margin-top: 25px;">CONTACT INFORMATION</h3>
                              <div class="py-3">
                                  <i class="fas fa-phone"><br><p style="color: aliceblue;">Phone<br>
                                    <h5>+6287730426513 (Toll Free).</h5></p>
                                  </i>
                                  <i class="fas fa-map-marked-alt"><br><p style="color: aliceblue;">Adress
                                    <br><h5>Cikambuy Hilir, Kec.Katapang, Kab.Bandung.</h5></p>
                                  </i>
                                  <i class="fas fa-envelope"><br><p style="color: aliceblue;">Email
                                    <br><h5>info@wpumovie.com.</h5></p>
                                  </i>
                              </div>
                              <!-- <h4>SHARE THE TASTE</h4>
                              <div class="py-4">
                                 <i class="fas fa-facebook"  style="color: aliceblue;"><br>Facebook</i>
                                 <i class="fas fa-twitter"  style="color: aliceblue;"><br>Twitter</i>
                                 <i class="fas fa-facebook"  style="color: aliceblue;"><br>Instagram</i>
                                 <i class="fas fa-facebook"  style="color: aliceblue;"><br>You Tube</i> 
                              </div> -->
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark text-center text-white">
        <p>Copyright 2019 || Powered By Muhammad Rizal Supriadi Web Design and Development</p>
    </footer>

  <!-- <script>
    window.sr = ScrollReveal();
    sr.reveal('.container',{duration:1000});
    sr.reveal('.container-fluid',{duration:1000});
    sr.reveal('.row',{duration:1000});
    sr.reveal('.cols3',{duration:1000});
  </script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  <script>
  $(document).ready(function(){
    $("a").on('click', function(event) {
     if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 3000, function(){
          window.location.hash = hash;
        });
      } // End if
    });
  });
  </script>
</body>
</html>