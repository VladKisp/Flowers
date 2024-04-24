<?php
// Підключення до бази даних (припустимо, що ми маємо базу даних з назвою "travel" і таблицею "trips")
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "travel";

// Створення з'єднання
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Обробка додавання нової подорожі
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST["destination"];
    $date = $_POST["date"];
    $description = $_POST["description"];

    // Підготовка та виконання запиту до бази даних
    $sql = "INSERT INTO trips (destination, date, description) VALUES ('$destination', '$date', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New trip added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Закриття з'єднання з базою даних
$conn->close();
?>
