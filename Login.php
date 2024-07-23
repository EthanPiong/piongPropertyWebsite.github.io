<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <li><a href="Register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="form-section">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
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

    $sql = "SELECT password FROM user WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($pass === $row['password']) {
            echo "<script>alert('Login successful!'); </script>";
        } else {
            echo "<script>alert('Invalid password.'); </script>";
        }
    } else {
        echo "<script>alert('No user found.'); </script>";
    }
}

$conn->close();
?>
