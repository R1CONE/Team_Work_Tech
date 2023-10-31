<?php
$servername = "localhost"; // Nazwa serwera bazy danych
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło użytkownika
$database = "try_bd"; // Nazwa bazy danych

// Połączenie z bazą danych
$conn = new mysqli($servername, $username, $password, $database);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
} else {
    echo "Połączenie z bazą danych powiodło się!";
    
    // Wykonanie zapytania SQL w celu pobrania danych z tabeli "accounts"
    $sql = "SELECT id, login, password FROM accounts"; //id, login, password - to co macie w bd  // accounts - nazwa tabeli
    $result = $conn->query($sql);

    // Sprawdzenie dostępności danych i ich wyświetlenie
    if ($result->num_rows > 0) {
        echo "<h2>Zawartość tabeli accounts:</h2>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Login</th><th>Hasło</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["login"] . "</td><td>" . $row["password"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Brak danych w tabeli.";
    }

    // Zamykamy połączenie
    $conn->close();
}
?>
