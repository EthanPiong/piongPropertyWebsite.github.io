<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
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
        <section class="properties">
            <h2>Available Properties</h2>
            <div class="property-list">
                <div class="property">
                    <h3>Property 1</h3>
                    <p>Location: City A</p>
                    <p>Price: $500,000</p>
                    <a href="property-detail.php?id=1" class="cta-button">View Details</a>
                </div>
                <div class="property">
                    <h3>Property 2</h3>
                    <p>Location: City B</p>
                    <p>Price: $750,000</p>
                    <a href="property-detail.php?id=2" class="cta-button">View Details</a>
                </div>
                <div class="property">
                    <h3>Property 3</h3>
                    <p>Location: City C</p>
                    <p>Price: $1,000,000</p>
                    <a href="property-detail.php?id=3" class="cta-button">View Details</a>
                </div>
                <!-- Add more properties as needed -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Property Listings. All rights reserved.</p>
    </footer>
</body>
</html>
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="properties.html">Properties</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="property-detail">
            <h2><?php echo $property['name']; ?></h2>
            <p>Location: <?php echo $property['location']; ?></p>
            <p>Price: $<?php echo number_format($property['price']); ?></p>
            <p>Description: <?php echo $property['description']; ?></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Property Listings. All rights reserved.</p>
    </footer>
</body>
</html>
