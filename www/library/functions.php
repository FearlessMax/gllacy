<?php
function createConn(){
    $link = mysqli_connect("localhost", "root", "", "library");     // create connection to DB

    if (mysqli_connect_errno()) {                                   // if error
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}

function closeConn($link){
    mysqli_close($link);
}

function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}
?>

