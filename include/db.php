<?php 



$host = 'localhost';
$user = 'root';
$password = '';
$database = 'online-petition';

$conn = mysqli_connect("$host", "$user", "$password", "$database");

if ($conn) {
    echo "";
}

else {
    echo "connection failed" . mysqli_error($conn);
}

?>