<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trip</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add New Trip</h1>
    </header>

    <nav>
        <ul>
            <li><a href="travel_website.php">Home</a></li>
            <li><a href="add_trip.php">Add Trip</a></li>
        </ul>
    </nav>

    <section id="content">
        <h2>Add a New Trip</h2>
        <form action="process_trip.php" method="POST">
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required><br><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
            <button type="submit">Add Trip</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Travel Website</p>
    </footer>
</body>
</html>
