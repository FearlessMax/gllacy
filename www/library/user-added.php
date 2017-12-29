<?php
require 'header.php';
function addUser() {
    $link = createConn();
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $sql = "INSERT INTO users (first_name, second_name)
VALUES ('$first_name', '$second_name')";

    if ($link->query($sql) === TRUE) {
        echo "<p>Новый пользователь  $first_name $second_name успешно создан.<p>";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
    closeConn($link);
}
addUser();
require 'footer.php';
?>