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
    
    // Выполнение SQL-запроса для выборки данных из таблицы "accounts"
    $sql = "SELECT id, login, password FROM accounts";
    $result = $conn->query($sql);

    // Проверка наличия данных и их вывод
    if ($result->num_rows > 0) {
        echo "<h2>Содержание таблицы accounts:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Login</th><th>Password</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["login"] . "</td><td>" . $row["password"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "В таблице нет данных.";
    }

    // Закрываем соединение
    $conn->close();
}
?>
