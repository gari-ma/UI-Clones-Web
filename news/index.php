<?php
// create necessary configurations
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "obnews";

// create a connection
$garima = new mysqli($servername, $username, $password, $databaseName);



// check the failure
if(mysqli_connect_error()) {
    die("Go man");
}

// execute the required db ops
echo "Successfull";

// close the connection 
$garima->close();
?>