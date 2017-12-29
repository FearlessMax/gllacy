<?php
require 'header.php';
echo "<h2>Список всех книг библиотеки</h2>";
$link = createConn();
$sql = "SELECT id, title, author, year, publisher, language FROM books";
        
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: ".$row['id']." название: ".$row['title']." автор: ".$row['author']."<br>";
    }
} else {
    echo "0 results";
} 

closeConn($link);// close connection                              
require 'footer.php';
?>
