<?php
require 'header.php';
?>
<form method="POST" action="user-added.php" target="_self">
    <input name="first_name" type="text" placeholder="Имя"/>
    <input name="second_name" type="text" placeholder="Фамилия"/>
    <input type="submit" value="Добавить пользователя"/>
</form>
<?php
require 'footer.php';
?>