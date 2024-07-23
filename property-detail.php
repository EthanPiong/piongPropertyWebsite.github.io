<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$property_id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT * FROM properties WHERE id = $property_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $property = $result->fetch_assoc();
} else {
    echo "No property found.";
    exit;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $property['name']; ?> - Property Details</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Properties.php">Properties</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="property-detail">
            <h2><?php echo $property['name']; ?></h2>
            <img src="<?php echo $property['image_url']; ?>" alt="<?php echo $property['name']; ?>" class="property-image">
            <p>Location: <?php echo $property['location']; ?></p>
            <p>Features: <?php echo $property['Feature']; ?></p>
            <p>Size: <?php echo $property['Size']; ?>sqft</p>
            <p>Price: $<?php echo number_format($property['price']); ?></p>
            <p>Description: <?php echo $property['description']; ?></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Property Listings. All rights reserved.</p>
    </footer>
</body>
</html>
