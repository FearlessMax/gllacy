<?php
require 'header.php';
function takeBook() {
    $link = createConn();
    
    $user_id = $_POST['user_id'];
    $book_id = $_POST['book_id'];
    
    $sql = "SELECT books FROM users WHERE id=$user_id";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
    $books = $row['books'] + ' ' + $book_id;
    $sql = "UPDATE users SET books=$books WHERE id=$user_id";
    
    $result = $link->query($sql);
    if ($result === TRUE) {
        echo "<p>Книга  $book_id успешно записана на пользователя $user_id.<p>";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
    closeConn($link);
}
takeBook();
require 'footer.php';
?>