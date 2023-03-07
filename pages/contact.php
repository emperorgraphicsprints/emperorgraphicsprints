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
                  <a class="nav-link" href="../pages/petition.php">Petition</a>
                </li>
                 <li class="nav-item pe-3">
                  <a class="nav-link active" href="../pages/contact.php">Contact</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link" href="../pages/about.html">About</a>
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
                  <h1 style="font-size: 500%; color: #edc951;" class="m-0">Contact Us!</h1>
                  <p style="color: #fff; font-weight: 500;" class="ps-2">Do you have any question? Fill the below form</p>
                </div>
            </div>
        </div>
      </div>
      <!-- Banner ends here -->

      <!-- Main Section start here -->
      <div class="container p-3 my-5">
        <div class="col col-md-8 ">
            <p>Please be specify as possible "Subject" line will as this will help us answer your question more efficiently. You can also email us at <a href="mailto:online-petition2023@gmail.com">online-petition2023@gmail.com</a></p>
            <p>Thanks for taking your time</p>

              <?php global $conn;
            if(isset($_POST['contactform'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email1'];
                $subject = $_POST['subject'];
                $body = $_POST['body'];

                $query = "INSERT INTO contact(Fullname, Email, Subject, Body) values('$fullname', '$email', '$subject', '$body')";

                

                $run = mysqli_query($conn, $query);
                
                if($run){
                    echo "<div class='alert alert-success mt-5' role='alert'>Thanks for contacting us, we will get back to you shorly. Thanks</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'>Ops! Please try again.</div>" . mysqli_error($conn);
                            // header ('Refresh:5', 'url:index.php');
                }
            }        ?>
            <div class="contact-form">
              <form action="contact.php" method="post">
                
                <!-- Name Input -->
                <div class="mb-3">
                  <label for="fullname" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="fullname" id="fullname" required>
                </div>
                
                <!-- Email Input -->
                <div class="mb-3">
                  <label for="email1" class="form-label">Email address</label>
                  
                  <input type="email" class="form-control" name="email1" id="email1" aria-describedby="emailHelp" required>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                
                <!-- Subject Input -->
                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                
                <!-- Body Input -->
                <div class="mb-3">
                  <label for="body" class="form-label">Body</label>
                  
                  <textarea class="form-control" id="body" name="body" style="height: 130px" required></textarea>
                </div>
                
                <!-- Submit Button  -->
                <input type="submit" name="contactform" class="btn btn-primary" value="Submit">
                
              </form>
              
            </div>
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