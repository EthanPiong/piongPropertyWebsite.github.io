<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <section class="form-section">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Register</button>
            </form>
        </section>
    </main>

   
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO user (username, password) VALUES ('$user', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
