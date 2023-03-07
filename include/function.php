<?php require_once "db.php"; ?>

<?php 
    
    function addrecord() {
        
        
        global $conn;
        
        if(isset($_POST['submit-petition'])) {
            
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email =$_POST['email'];
            $title =$_POST['petition-title'];
            $details =$_POST['petition-details'];
            $file_name = basename($_FILES["fileToUpload"]["name"]);
            
            $query = "INSERT INTO petition(firstname, lastname, email, title, details, imagename) VALUES('$firstname', '$lastname', '$email', '$title', '$details',  '$file_name')";
            
            // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            // if($check !== false) {
            //     // echo"File is an image - ". $check["mime"] .".";
            //     $uploadOk =1; }
            // else{
            //     // echo"File is not an image.";
            //     $uploadOk =0;
            //     }
            
        
            // Check if file already exists
            if (file_exists($target_file)) {
                echo"Sorry, file already exists.";
                $uploadOk =0; }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] >5000000) {
                echo"Sorry, your file is too large.";
                $uploadOk = 0; }

            // Allow certain file formats
            if($imageFileType !="jpg" && $imageFileType !="png"&& $imageFileType !="jpeg" && $imageFileType !="gif") {
                echo"Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk =0;
        }

            // Check if $uploadOk is set to 0 by an error
            if($uploadOk ==0) {
                echo"Sorry, your file was not uploaded."; }
            // if evrything is ok, try to upload file
            else{
                
                
               
                
                $run = mysqli_query($conn, $query);
                
                if($run){
                    echo "<div class='alert alert-success mt-5' role='alert'>Petition added Successfully! Thanks</div>";
                    
                    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "<div class='alert alert-success' role='alert'>Image added Successfully! Thanks.</div>";
                        }
                        
                        else{
                        echo"<div class='alert alert-danger' role='alert'>Sorry, there was an error uploading your file.</div>";
                        }}
                else {
                    echo "<div class='alert alert-danger' role='alert'>Record was not added! Thanks</div>" . mysqli_error($conn);
                            // header ('Refresh:5', 'url:index.php');
                        }
                }
             
        }
    }

    function retrieverecord() {
        global $conn;
    
        $query = "SELECT * FROM petition ORDER BY Id ASC LIMIT 5";
        $run = mysqli_query($conn, $query);
        
        $data = array();
        while($row = mysqli_fetch_assoc($run)){

            $id = $row['Id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $title = $row['title'];
            $details = $row['details'];
            $file_name = $row['imagename'];
            $counter = $row['Counter'];
            $percentage = ($counter/1000) * 100;

            echo '<li class="item-a mb-5">';
            echo '<div class="card" style="width: 300px;">';
            echo '<div class="petition-img">';
            echo '<img src="uploads/' . $file_name . '" class="card-img-top" alt="petition">';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $title . '</h5>';
            echo '<p class="card-text" style="height: 70px; overflow: hidden;">' . $details . '</p>';
            echo '<div class="progress mx-3 mb-2">';
            echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: ' . $percentage . '%; color:black; font-weight: 700; padding: 5px; overflow: visible;" aria-valuenow="' . $counter . '" aria-valuemin="0" aria-valuemax="1000">' . $counter . '/1000 Signed</div>';
            echo '</div>';
            echo '<a href="index.php?edit={$id}" class="btn btn-warning w-100">View Petition</a>
          </button>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        
        }   

        
       
        
    
            
    }
    
    function setcounter() {
        global $conn;

        if(isset($_POST['sign-petition'])) {
            $counter = $_POST['counter'];
            $counter_title = $_POST['counter-title'];

            $query = "SELECT * FROM petition WHERE title = '$counter_title'";
            $run = mysqli_query($conn, $query);

            if (!$run) {
                die(mysqli_error($conn));
            }

            while($row = mysqli_fetch_assoc($run)){
                $counter = $row['Counter'];
            }


                $counter = $counter + 1;
            
                $query = "UPDATE petition SET Counter = '{$counter}' WHERE title = '$counter_title'";


                $run = mysqli_query($conn, $query);
        }
    }

    function petitionretrieverecord() {
        global $conn;
    
        $query = "SELECT * FROM petition ORDER BY Id ASC";
        $run = mysqli_query($conn, $query);
        
        $data = array();
        while($row = mysqli_fetch_assoc($run)){

            $id = $row['Id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $title = $row['title'];
            $details = $row['details'];
            $file_name = $row['imagename'];
            $counter = $row['Counter'];
            $percentage = ($counter/1000) * 100;

            echo '<div class=" col-md-6 col-lg-4 my-2 col-xl-4">';
            echo '<div class="card" style="">';
            echo '<div class="petition-img">';
            echo '<img src="../uploads/' . $file_name . '" class="card-img-top" alt="petition">';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $title . '</h5>';
            echo '<p class="card-text" style="height: 70px; overflow: hidden;">' . $details . '</p>';
            echo '<div class="progress mx-3 mb-2">';
            echo '<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: ' . $percentage . '%; color:black; font-weight: 700; padding: 5px; overflow: visible;" aria-valuenow="' . $counter . '" aria-valuemin="0" aria-valuemax="1000">' . $counter . '/1000 Signed</div>';
            echo '</div>';
            echo '<a href="index.php?edit={$id}" class="btn btn-warning w-100">View Petition</a>
          </button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        
        }   

        }
?>