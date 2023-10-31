<?php
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя
$database = "test_bd"; // Имя базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Eror do połoczenia" . $conn->connect_error);
} else {
    echo "Wszyskto w porządku";
    
    // Тут можно выполнять операции с базой данных
    
    // Закрываем соединение при необходимости
    $conn->close();
}
?>
