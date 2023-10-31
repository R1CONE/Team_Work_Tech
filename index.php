<?php
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя
$database = "try_bd"; // Имя базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
} else {
    echo "Подключение к базе данных прошло успешно!";
    
    // Тут можно выполнять операции с базой данных
    
    // Закрываем соединение при необходимости
    $conn->close();
}
?>
