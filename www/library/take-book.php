<?php
require 'header.php';
?>
<h2>Записать книгу на читателя:</h2>

<form method="POST" action="book-taken.php" target="_self">
    <input name="user_id" type="text" placeholder="id ользователя"/>
    <input name="book_id" type="text" placeholder="id книги"/>
    <input type="submit" value="Записать книгу"/>
</form>
<?php
require 'footer.php';
?>