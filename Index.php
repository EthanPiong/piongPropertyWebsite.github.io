<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Website</title>
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
        <section class="hero">
            <h1 style="color: white;">Welcome to Our Property Listings</h1>
            <p style="color: white;">Find your dream property with us.</p>
            <a href="Properties.php" class="cta-button">View Properties</a>
            
        </section>
        
        <section class="properties">
            <h2>Featured Properties</h2>
            <div class="property">
                <img src="property1.jpg" alt="Property 1">
                <h3>Modern Family Home</h3>
                <p>3 Beds, 2 Baths, 1,500 sqft</p>
                <p>RM 700k</p>
                <a href="property-detail.php?id=1" class="property-button">View Details</a>
            </div>
            <div class="property">
                <img src="property2.jpg" alt="Property 2">
                <h3>Luxury Apartment</h3>
                <p>2 Beds, 2 Baths, 900 sqft</p>
                <p>RM 350k</p>
                <a href="property-detail.php?id=2" class="property-button">View Details</a>
            </div>
            <div class="property">
                <img src="property3.jpg" alt="Property 3">
                <h3>Banglo</h3>
                <p>5 Beds, 4 Bath, 2000 sqft</p>
                <p>RM 2.5m</p>
                <a href="property-detail.php?id=3" class="property-button">View Details</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Property Listings. All rights reserved.</p>
    </footer>
</body>
</html>
