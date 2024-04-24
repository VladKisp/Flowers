// trip_details.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Trip Details</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add_trip.php">Add Trip</a></li>
        </ul>
    </nav>

    <section id="content">
        <?php
        // Підключення до бази даних
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "travel";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Отримання ID подорожі з параметрів запиту
        $trip_id = $_GET['id'];

        // Отримання детальної інформації про подорож з бази даних
        $sql = "SELECT * FROM trips WHERE id = $trip_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h2>{$row['destination']}</h2>";
            echo "<p>Date: {$row['date']}</p>";
            echo "<p>Description: {$row['description']}</p>";
            // Відображення фотографії, якщо вона є
            if (!empty($row['photo'])) {
                echo "<img src='{$row['photo']}' alt='Trip Photo'>";
            }
        } else {
            echo "Trip not found";
        }

        $conn->close();
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Website</p>
    </footer>
</body>
</html>
