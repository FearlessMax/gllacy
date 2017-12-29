<?php
require 'header.php';
?>
<form method="POST" action="book-added.php" target="_self">
    <input name="title" type="text" placeholder="Название"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input name="year" type="number" placeholder="Год"/>
    <input name="publisher" type="text" placeholder="Издатель"/>
    <input name="language" type="text" placeholder="Язык"/>
    <input type="submit" value="Добавить книгу"/>
</form>
<?php
require 'footer.php';
?>