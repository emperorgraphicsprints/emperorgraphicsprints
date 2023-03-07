<?php require_once "../include/function.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Petition - The Platform for Change</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../assets/css/lightslider.css">
    <link rel="stylesheet" href="../resources/css/responsive.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/lightslider.js"></script>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <!-- header start here -->
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
                  <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                </li>
                 <li class="nav-item pe-3">
                  <a class="nav-link active" href="../pages/petition.php">Petition</a>
                </li>
                 <li class="nav-item pe-3">
                  <a class="nav-link" href="../pages/contact.php">Contact</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link " href="../pages/about.html">About</a>
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
    
    <!-- Banner Starts here -->
    <div class="banner">
        <div class="contact-banner banner d-flex align-items-end">
            <div class="container d-flex">
                <div class="banner-text text-start ">
                  <h1 style="font-size: 500%; color: #edc951;" class="m-0">Petitions</h1>
                  <p style="color: #fff; font-weight: 500;" class="ps-2">View and Sign Petition</p>
                </div>
            </div>
        </div>
      </div>
      <!-- Banner ends here -->

      <!-- Main Section start here -->
      <div class="container p-3 my-5">
        <div class="row">
            <!--  -->
                <?php petitionretrieverecord() ?>
            <!-- </div> -->
       
            
        </div>
      </div>
      <!-- Main Section ends here -->
                  
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

     
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/validate.js"></script>
</body>
</html>