<?php 



$host = 'sql208.byethost8.com';
$user = 'b8_33632701';
$password = 'Online12@';
$database = 'onlinePetition';

$conn = mysqli_connect("$host", "$user", "$password", "$database");

if ($conn) {
    echo "";
}

else {
    echo "connection failed" . mysqli_error($conn);
}

?>