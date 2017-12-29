<?php
require 'header.php';
echo "<h2>Список всех читателей библиотеки</h2>";
$link = createConn();
$sql = "SELECT id, first_name, second_name FROM users";
        
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: ".$row['id']." first_name: ".$row['first_name']." second_name: ".$row['second_name']."<br>";
    }
} else {
    echo "0 results";
} 

closeConn($link);// close connection
require 'footer.php';
?>
    