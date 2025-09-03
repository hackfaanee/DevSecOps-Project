<?php
// ⚠️ Intentionally vulnerable PHP code for testing SonarQube scans

// SQL Injection vulnerability
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Directly using user input in SQL query (BAD PRACTICE)
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = " . $id;   // 🔴 SQL Injection vulnerability

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "User: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


// Cross-Site Scripting (XSS) vulnerability
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello " . $name;   // 🔴 Output not sanitized → XSS possible
}


// Hardcoded secret (will be caught by SonarQube/Trivy)
$apiKey = "12345-SECRET-API-KEY";  // 🔴 Sensitive hardcoded credential
?>
