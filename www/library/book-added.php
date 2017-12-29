<?php
require 'header.php';
function addBook() {
    $link = createConn();
    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $publisher = $_POST['publisher'];
    $language = $_POST['language'];
    
    $sql = "INSERT INTO books (title, author, year, publisher, language)
VALUES ('$title', '$author', '$year', '$publisher', '$language')";

    if ($link->query($sql) === TRUE) {
        echo "<p>Новая книга  $author - $title успешно добавлена.<p>";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
    closeConn($link);
}
addBook();
require 'footer.php';
?>