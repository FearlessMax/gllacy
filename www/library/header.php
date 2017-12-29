<?php
    require "functions.php";
    echo '<html>
	<head>
	   <title>Информационная система "Бибилиотека"</title>
	</head>
	<body>
        <h1>Информационная система "Бибилиотека"</h1>';
    $this_page = substr($_SERVER["REQUEST_URI"], strrpos($_SERVER["REQUEST_URI"], '/') + 1);
    if($this_page != "index.php"){
        echo'<a href="index.php">Вернуться на главную</a><br>
        <br>';
    }
?>