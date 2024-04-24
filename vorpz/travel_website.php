<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Travel Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="travel_website.php">Home</a></li>
            <li><a href="add_trip.php">Add Trip</a></li>
        </ul>
    </nav>

    <section id="content">
        <h2>Available Trips</h2>
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

        // Отримання списку подорожей з бази даних і виведення їх на сторінку
        $sql = "SELECT id, destination, date FROM trips";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p><a href='trip_details.php?id=" . $row["id"] . "'>" . $row["destination"] . "</a> - " . $row["date"] . "</p>";
            }
        } else {
            echo "No trips available";
        }

        $conn->close();
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Travel Website</p>
    </footer>
</body>
</html>
