<?php
require 'header.php';

/* возвращаем имя текущей базы данных */
/*if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("<br>Default database is %s.<br>", $row[0]);
    mysqli_free_result($result);
}*/
                                                    
?>
        <!--// записать книгу на читателя
        // сдать книгу
        // добавить читателя
        // добавить книгу
        // записать книгу на читателя
        // сдать книгу
        // найти читателя
        // найти книгу-->
        <a href="take-book.php">записать книгу на читателя</a><br>
        <a href="return-book.php">сдать книгу</a><br>
        <a href="add-user.php">добавить читателя</a><br>
        <a href="add-book.php">добавить книгу</a><br>
        <a href="find-user.php">найти читателя</a><br>
        <a href="find-book.php">найти книгу</a><br>
<?php
require 'footer.php';
?>