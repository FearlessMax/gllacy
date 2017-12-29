<?php
require 'header.php';
$link = mysqli_connect("localhost", "root", "", "library");     // create connection to DB

if (mysqli_connect_errno()) {                                   // if error
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
   
mysqli_close($link);                                            // close connection
require 'footer.php';
?>
    