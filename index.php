<?php require_once "include/function.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Petition - The Platform for Change</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="assets/css/lightslider.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/lightslider.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>

    <!-- Navbar starts here -->

    <header class="top">
        <nav class="navbar navbar-expand-md navbar-dark ">
          <div class="container-fluid pt-3">
            <a class="navbar-brand ps-5 me-5" href="#">Online Petition</a>
            <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
              <ul class="navbar-nav mb-2 mb-md-0 ms-auto me-auto pe-5">
                <li class="nav-item pe-3">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                 <li class="nav-item pe-3">
                  <a class="nav-link" href="pages/petition.php">Petition</a>
                </li>
                 <li class="nav-item pe-3">
                  <a class="nav-link" href="pages/contact.php">Contact</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="pages/about.html">About</a>
                  </li>
              </ul>
              <!-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>
      </header>

    <!-- Navbar ends here -->

    
    <main>
    <!-- Carousel Start Here -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <!-- Carousel Undicator start here -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
    <!-- Carousel Undicator end here -->            

    <!-- Carousel inner start here -->
        <div class="carousel-inner">

                <!-- First Carousel start here -->
              <div class="carousel-item active">
                <div class="inner1"></div>
                
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>The Platform for Change!</h1>
                    <p>It's free. Its Easy. and it result in real change.</p>
                    <p><a class="btn btn-lg four" href="#startApetition">Start a Petition</a></p>
                  </div>
                </div>
              </div>
                <!-- First Carousel end here -->

            <!-- Second carousel start here -->
              <div class="carousel-item">
                <div class="inner2"></div>
        
                <div class="container">
                  <div class="carousel-caption">
                    <h1>We are committed to fostering a <br />genuine grassroots democracy.</h1>
                    <p>We offer the physical space to host your petition, and we give you the tools to gather signatures</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
            <!-- Second carousel end here -->
            </div>

     <!-- Carousel inner ends here -->
            
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    <!-- Carousel Start Here -->

    <!-- Start a petition section  -->
          <section class="container mb-5" id="startApetition">
            <div class="row">
                <div class="col-md-7"> 
                    <h2 class="text-center pt-5">Write a petition Now!</h2>

                    
            <!-- Start a petition form begin here -->
                    <form class="row needs-validation px-3" action="index.php" method="post" enctype="multipart/form-data" novalidate>

                    <?php addRecord(); ?>
                <!-- First name field start here -->
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">

                                <input type="text" class="form-control form-control-sm" name="firstname" id="firstname" placeholder="First Name" required>

                                <label for="firstname">First Name</label>

                                <div class="invalid-feedback">Please enter your First Name</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                <!-- First name field ends here -->

                <!-- Last name field start here -->
                        <div class="col-sm-6">
                            <div class="form-floating mt-sm-3 mb-3">

                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>

                                <label for="lastname">Last Name</label>

                                <div class="invalid-feedback">Please enter your Last Name</div>
                                <div class="valid-feedback">Looks good!</div>
                              </div>
                        </div>
                <!-- Last name field ends here -->

                <!-- Email Address field start here -->
                        <div class="col-12">
                            <div class="form-floating  mb-3">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback">Please enter your Email</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                <!-- Email Address field ends here -->

                <!-- Petition Title field start here -->
                        <div class="col-12">
                            <div class="form-floating mb-3">

                                <input type="text" class="form-control" id="petition-title" name="petition-title" placeholder="Petition Title" required>

                                <label for="petition-title">Petition Title</label>

                                <div class="invalid-feedback">Please enter the Petition Title</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                <!-- Petition Title field ends here -->
                
                <!-- Petition Details start here -->
                        <div class="col-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="petition-details" name="petition-details" style="height: 130px" required></textarea>
                                <label for="petition-details">Pettition Details</label>
                                <div class="invalid-feedback">Please enter the Petition description</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                <!-- Petition Details end here -->

                <!-- FIle Input start here -->
                            <div class="col-12 mb-3">
                                <div class="mb-3">
                                    <label for="fileToUpload" class="form-label">Upload Files (Images Only)</label>
                                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" required>
                                  </div>
                            </div>
                <!-- FIle Input end here -->

                <!-- Submit Button start here -->
                            <div class="col-12 text-center">
                                <input type="submit" name="submit-petition" value="Submit Petition" class="btn btn-primary p-3 pe-5 ps-5 mb-3">
                            </div>
                <!-- Submit Button start here -->
                        
                    </form>
            <!-- Start a petition form end here -->
                </div>

            <!-- Petition Image Start Here -->
                <div class="col-fluid col-md-5">
                    <img src="resources/img/petition-3.jpeg" alt="Petition Image" style=" width: 100%; overflow: hidden; height: 100%; object-fit: cover;">
                </div>
            <!-- Petition Image end Here -->
            </div>
          </section>
    <!-- Start a petition section  ends-->

    <!-- View Petition Section Start here -->
          <section class="view-petition p-3">
          <ul id="autoWidth" class="cs-hidden m-1">      

  
          <?php retrieverecord(); // Get the first five rows from the database
          ?>
              </ul>
              
    
          </section>

           
    <!-- View Petition Section Start here -->
    
    <!-- Quote Section -->
          <section class="py-5" style="background-color: rgb(246, 244, 244);">
            <div id="carouselExampleSlidesOnly" class="carousel slide py-5" data-bs-ride="carousel">
                <div class="carousel-inner">
            <!-- First Quote Start Here -->
                  <div class="carousel-item active">
                    <figure class="text-center ">
                        <blockquote class="blockquote px-5">
                          <h2>A well-known quote, contained in a blockquote element.</h2>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                  </div>
            <!-- Second Quote Start Here -->
                  <div class="carousel-item">
                    <figure class="text-center">
                        <blockquote class="blockquote px-5">
                          <h2>A well-known quote, contained in a blockquote element.</h2>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                  </div>
            <!-- Third Quote Start Here -->
                  <div class="carousel-item">
                    <figure class="text-center ">
                        <blockquote class="blockquote px-5">
                          <h2>A well-known quote, contained in a blockquote element.</h2>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                      </figure>
                  </div>
                </div>
              </div>
          </section>
    <!-- Quote Section end here -->
    
    <!-- footer start here -->
    <section class="view-petition">
    <div class="container-fluid">
      <footer class="d-flex flex-wrap justify-content-between align-items-center p-3">
        <p class="col-md-4 mb-0 emperor">&copy; 2022 Company, Inc</p>
      
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
      </footer>
    </div>
  </section>
      </main>


    
      
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/validate.js"></script>
</body>
</html>