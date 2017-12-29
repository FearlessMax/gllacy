<html>
	<head>
	<title>Моя первая PHP-страница</title>
	</head>
	<body>
        <h1>azaza</h1>
<?php
$link = mysqli_connect("localhost", "root", "", "library");

/* проверяем соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* возвращаем имя текущей базы данных */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.<br>", $row[0]);
    mysqli_free_result($result);
}

$name = 'qqqq';
$sql = "INSERT INTO test (name) VALUES ('qqqq')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$sql = "SELECT id, name FROM test WHERE name = 'qqqq'";
        
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
        
$sql = "DELETE FROM test WHERE id % 2 = 0";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $link->error;
}
        
/*if (!$result = $link->query($sql)) {
    // О нет! запрос не удался. 
    echo "Извините, возникла проблема в работе сайта.";

    // И снова: не делайте этого на реальном сайте, но в этом примере мы покажем, 
    // как получить информацию об ошибке:
    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер_ошибки: " . $link->errno . "\n";
    echo "Ошибка: " . $link->error . "\n";
    exit;
}

// Уфф, мы это сделали. У нас есть соединение с базой даннх и успешный запрос. 
// Но где же его результат?
if ($result->num_rows === 0) {
    // Упс! в запросе нет ни одной строки! Иногда это ожидаемо и нормально, иногда нет.
    // Решать Вам. В данном случае, может быть actor_id был слишком большим? 
    echo "Мы не смогли найти совпадение для qqq, простите. Пожалуйста, попробуйте еще раз.";
    exit;
}*/

mysqli_close($link);
?>
        </body>
	</html>
	